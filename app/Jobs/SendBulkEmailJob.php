<?php

namespace App\Jobs;

use App\Models\Champion;
use Illuminate\Bus\Queueable;
use App\Models\SocialMediaPosting;
use Illuminate\Support\Facades\Log;
use App\Mail\SocialMediaPostingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendBulkEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public string $recipientModelClass,
        public string $mailableClass,
        public mixed $modelId,
        public array $mailableData,
        public int $chunkSize = 200
    ) {}


    public function handle(): void
    {
        $model = app($this->recipientModelClass)
            ->findOrFail($this->modelId);

        $recipients = $this->getRecipientQuery()->cursor();

        foreach ($recipients as $recipient) {
            if ($this->shouldSendToRecipient($recipient)) {
                $this->sendEmailToRecipient($recipient, $model);
            }
        }
    }

    
    protected function getRecipientQuery()
    {
        return Champion::query()
            ->whereNotNull('email')
            ->where('email', '!=', '');
    }


    
    protected function shouldSendToRecipient($recipient): bool
    {
        return filter_var($recipient->email, FILTER_VALIDATE_EMAIL);
    }


    
    protected function sendEmailToRecipient($recipient, $model): void
    {
        try {
            Mail::to($recipient->email)
                ->queue(
                    new $this->mailableClass(...$this->prepareMailableData($model, $recipient))
                );
        } catch (\Exception $e) {
            Log::error("Email failed to {$recipient->email}: {$e->getMessage()}");
        }
    }

    protected function prepareMailableData($model, $recipient): array
    {
        return $this->mailableData;
    }
}
