<x-layouts.email.app>

    <div class="header">
        {{-- <img src="{{ $message->embed(public_path('images/logo-secondary.png')) }}" alt="{{ config('app.name') }}" style="height: 80px;"> --}}
    </div>

    <div class="content">
        <h1 style="color: #00674F; font-size: 20px; margin-bottom: 20px;">
            <span style="background-color: #e8f5e9; padding: 4px 8px; border-radius: 4px;">
                Thank You for Your Continued Support!
            </span>
        </h1>

        <div style="background-color: #f5f5f5; padding: 16px; border-radius: 8px; margin-bottom: 20px;">
            <p style="margin: 0; font-weight: 600;">You're a Champion once again!</p>
            <p style="margin: 8px 0 0 0; font-size: 18px;">
                <strong class="highlight">{{ $name }}</strong>
            </p>
            <p style="margin: 12px 0 0 0; line-height: 1.5;">
                We sincerely thank you for renewing your subscription and continuing to stand with our mission. Your commitment empowers us to grow and serve our community even better.
            </p>
        </div>

        <div style="background-color: #e8f5e9; padding: 16px; border-radius: 8px; margin-bottom: 20px;">
            <p style="margin: 0; font-weight: 600;">Your Subscription Details:</p>
            <ul style="list-style: none; padding-left: 0; margin: 8px 0 0 0; font-size: 16px; line-height: 1.6;">
                <li><strong>Membership:</strong> {{ $membership }}</li>
                <li><strong>Payment Amount:</strong> ₱{{ number_format($amount, 2) }}</li>
                <li><strong>Plan Type:</strong> {{ ucfirst($planType) }}</li>
                <li><strong>Next Payment Due:</strong> {{ $nextPayment }}</li>
            </ul>
        </div>

        <div style="margin-top: 24px;">
            <p style="font-weight: 600; margin-bottom: 12px;">What’s Next:</p>
            <ul style="padding-left: 20px; margin: 12px 0; line-height: 1.6;">
                <li>You’re now fully reactivated as a Champion!</li>
                <li>We'll keep you updated on events and new opportunities.</li>
                <li>Stay connected — we love having you in the community!</li>
            </ul>
        </div>

        <div style="margin-top: 24px; font-size: 14px; color: #757575;">
            <p>Visit <a href="{{ config('app.url') }}" style="color: #00674F;">our website</a> anytime to stay informed.</p>
            <p style="margin-top: 8px;">Once again, thank you for being a part of this journey.</p>
        </div>
    </div>

</x-layouts.email.app>
