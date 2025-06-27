<x-layouts.email.app>

    <div class="header">
        <img src="{{ $message->embed(public_path('images/logo-secondary.png')) }}" alt="{{ config('app.name') }}" style="height: 80px;">
    </div>

    <div class="content">
        <h1 style="color: #00674F; font-size: 20px; margin-bottom: 20px;">
            <span style="background-color: #ffebee; padding: 4px 8px; border-radius: 4px;">
                Welcome, New Champion!
            </span>
        </h1>

        <div style="background-color: #f5f5f5; padding: 16px; border-radius: 8px; margin-bottom: 20px;">
            <p style="margin: 0; font-weight: 600;">We're thrilled to have you join us!</p>
            <p style="margin: 8px 0 0 0; font-size: 18px;">
                <strong class="highlight">{{ $name }}</strong>
            </p>
            <p style="margin: 12px 0 0 0; line-height: 1.5;">
                Thank you for becoming a part of our community. Your passion and dedication will inspire others, and we can't wait to see the incredible impact you'll make.
            </p>
        </div>

        <div style="margin-top: 24px;">
            <p style="margin-bottom: 12px; font-weight: 600;">What to expect next:</p>
            <ul style="padding-left: 20px; margin: 12px 0; line-height: 1.6;">
                <li>A team member will reach out within <strong>this dayy</strong> to confirm your registration.</li>
                <li>You’ll receive program materials and guidelines via email.</li>
                <li>Stay tuned for updates on training sessions or community events!</li>
            </ul>
        </div>
        

        <div style="margin-top: 24px; font-size: 14px; color: #757575;">
            <p>In the meantime, feel free to explore <a href="{{ config('app.url') }}" style="color: #00674F;">our website</a>.</p>
            <p style="margin-top: 8px;">Welcome to the team we’re thrilled to have you!</p>
        </div>
    </div>

</x-layouts.email.app>

