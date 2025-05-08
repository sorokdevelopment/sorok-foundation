<?php

namespace App\Jobs;

use App\Models\Champion;
use Illuminate\Bus\Queueable;
use App\Models\SocialMediaPosting;
use App\Mail\SocialMediaPostingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class SendChampionEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public readonly int $modelId,
        public readonly int $chunkSize = 500
    ) {}

    public function handle(): void
    {
        $modelValue = SocialMediaPosting::findOrFail($this->modelId);
        
        Champion::query()
            ->whereNotNull('email')
            ->where('email', '!=', '')
            ->cursor()
            ->chunkById($this->chunkSize, function ($champions) use ($modelValue) {
                $this->processChunk($champions, $modelValue);
            });
    }

    protected function processChunk($champions, $modelValue): void
    {
        foreach ($champions as $champion) {
            if (filter_var($champion->email, FILTER_VALIDATE_EMAIL)) {
                try {
                    Mail::to($champion->email)->send(new SocialMediaPostingMail(
                        $modelValue->title,
                        $modelValue->description,
                        $modelValue->link,
                        $modelValue->image
                    ));
                } catch (\Exception $e) {
                    \Log::error("Email failed to {$champion->email}: {$e->getMessage()}");
                }
            }
        }
    }
}
