<?php

namespace App\Mail;

use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\DomCrawler\Crawler;


class NewsletterMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $processedContent;


    /**
     * Create a new message instance.
     */
    public function __construct(private string $title, private string $content)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Newsletter Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.newsletter-mail',
            with: [
                'title' => $this->title,
                'content' => $this->processedContent ?? $this->content
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function withSymfonyMessage($message): void
    {
        // Now we have access to $message->embed()
        $this->processedContent = $this->embedImagesInContent($message, $this->content);
    }

    protected function embedImagesInContent($message, $html)
    {
        libxml_use_internal_errors(true); // Suppress HTML5 warnings

        $doc = new \DOMDocument();
        $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        $images = $doc->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (str_starts_with($src, 'http://localhost/storage') || str_starts_with($src, '/storage')) {
                $filename = basename($src);
                $path = storage_path('app/public/newsletters/' . $filename);

                if (file_exists($path)) {
                    $cid = $message->embed($path);
                    $img->setAttribute('src', $cid);
                }
            }
        }

        // Save HTML back
        $body = $doc->getElementsByTagName('body')->item(0);
        $innerHTML = '';
        foreach ($body->childNodes as $child) {
            $innerHTML .= $doc->saveHTML($child);
        }

        return $innerHTML;
    }


    
}
