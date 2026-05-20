<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vistara Education</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:30px;">
    <div style="max-width:600px; margin:0 auto; background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
        <div style="background:linear-gradient(135deg,#A50000,#c41212); color:#fff; padding:28px 30px;">
            <h2 style="margin:0; font-size:1.4rem;">Vistara Education</h2>
        </div>
        <div style="padding:30px; color:#333; line-height:1.6;">
            <p>Hello {{ $contact->name }},</p>

            @if ($contact->type === 'inquiry')
                <p>Thank you for your study abroad inquiry. Our counsellor will reach out to you soon to discuss your goals and next steps.</p>
            @elseif ($contact->type === 'newsletter')
                <p>Thank you for subscribing to the Vistara Education newsletter. You will now receive updates about study abroad opportunities, courses, and scholarships.</p>
            @else
                <p>Thank you for contacting Vistara Education. We have received your message and will get back to you shortly.</p>
            @endif

            @if ($contact->content && $contact->type !== 'newsletter')
                <div style="margin-top:20px; padding:15px 18px; background:#fafafa; border-left:3px solid #A50000; border-radius:6px;">
                    <strong style="display:block; margin-bottom:6px;">Your message:</strong>
                    <span style="color:#555;">{{ $contact->content }}</span>
                </div>
            @endif

            <p style="margin-top:24px;">Warm regards,<br><strong>Vistara Education Team</strong></p>
        </div>
        <div style="background:#0d0d0d; color:#999; padding:18px 30px; text-align:center; font-size:0.8rem;">
            &copy; {{ date('Y') }} Vistara Education Pvt. Ltd. All rights reserved.
        </div>
    </div>
</body>
</html>
