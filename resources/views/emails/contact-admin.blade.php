<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New {{ ucfirst($contact->type ?: 'contact') }} Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:30px;">
    <div style="max-width:640px; margin:0 auto; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
        <div style="background:#0d0d0d; color:#fff; padding:22px 28px;">
            <h2 style="margin:0; font-size:1.2rem;">New {{ ucfirst($contact->type ?: 'contact') }} Submission</h2>
        </div>
        <div style="padding:24px 28px; color:#333; line-height:1.6;">
            <table style="width:100%; border-collapse:collapse;">
                <tr><td style="padding:8px 0; color:#777; width:140px;">Name</td><td style="padding:8px 0;"><strong>{{ $contact->name }}</strong></td></tr>
                <tr><td style="padding:8px 0; color:#777;">Email</td><td style="padding:8px 0;"><a href="mailto:{{ $contact->email }}" style="color:#A50000; text-decoration:none;">{{ $contact->email }}</a></td></tr>
                @if ($contact->phone)
                    <tr><td style="padding:8px 0; color:#777;">Phone</td><td style="padding:8px 0;">{{ $contact->phone }}</td></tr>
                @endif
                <tr><td style="padding:8px 0; color:#777;">Type</td><td style="padding:8px 0;">{{ ucfirst($contact->type ?: 'contact') }}</td></tr>
                @if ($contact->subject)
                    <tr><td style="padding:8px 0; color:#777;">Subject</td><td style="padding:8px 0;">{{ $contact->subject }}</td></tr>
                @endif
                <tr><td style="padding:8px 0; color:#777;">Submitted</td><td style="padding:8px 0;">{{ $contact->created_at }}</td></tr>
            </table>

            @if ($contact->content && $contact->type !== 'newsletter')
                <div style="margin-top:20px; padding:15px 18px; background:#fafafa; border-left:3px solid #A50000; border-radius:6px;">
                    <strong style="display:block; margin-bottom:8px;">Message:</strong>
                    <span style="color:#555; white-space:pre-wrap;">{{ $contact->content }}</span>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
