<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <style>
        /* Base Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
        }
        
        /* Email Container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #f5f5f5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #00674F;
        }
        
        /* Header */
        .header {
            background-color: #00674F;
            color: white;
            padding: 28px 24px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: -0.25px;
        }
        
        /* Content */
        .content {
            padding: 24px 32px;
        }
        
        /* Post Image */
        .post-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 24px;
            border: 1px solid #00674F;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        
        /* Title */
        .post-title {
            color: #333333;
            font-size: 20px;
            font-weight: 700;
            margin: 0 0 16px 0;
            line-height: 1.3;
        }
        
        /* Description */
        .post-description {
            color: #4b5563;
            font-size: 15px;
            margin-bottom: 24px;
            white-space: pre-line;
        }
        
        /* CTA Button */
        .cta-button {
            display: inline-block;
            background-color: #00674F;
            color: white !important;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            text-align: center;
            margin: 16px 0;
            box-shadow: 0 2px 4px rgba(79, 70, 229, 0.2);
            transition: all 0.2s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.2);
        }
        
        /* Divider */
        .divider {
            border: none;
            height: 1px;
            background-color: #e5e7eb;
            margin: 28px 0;
        }
        
        /* Footer */
        .footer {
            background-color: #f9fafb;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
        }
        
        .footer p {
            margin: 0;
            line-height: 1.5;
        }
        
        /* Responsive */
        @media screen and (max-width: 600px) {
            .content {
                padding: 24px;
            }
            
            .post-title {
                font-size: 18px;
            }
            
            .post-description {
                font-size: 14px;
            }
            
            .cta-button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body style="padding: 20px 0; background-color: #f0f4f8;">
    <span style="display:none;font-size:0;line-height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;">
        {{ $title }} - {{ Str::limit(strip_tags($description), 100) }}
    </span>
    <div class="email-container">
        <div class="header">
            {{-- <img src="{{ $message->embed(public_path('images/logo-secondary.png')) }}" alt="{{ config('app.name') }}" style="height: 80px;"> --}}
        </div>
        
        
        <div class="content">
            @if($image)
                {{-- <img src="{{ $message->embed(storage_path('app/public/'.$image)) }}" alt="{{ $title }}" class="post-image"> --}}
            @endif
            
            <h1 class="post-title">{{ $title }}</h1>
            
            <div class="post-description">{{ $description }}</div>
            
            <center>
                <a href="{{ $link }}" class="cta-button">Read Full Post →</a>
            </center>
            
            <div class="divider"></div>
            
            <p style="font-size: 13px; color: #6b7280; text-align: center;">
                You received this email because you're a registered champion at {{ config('app.name') }}.<br>
            </p>
        </div>
        
        <div class="footer">
            <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>