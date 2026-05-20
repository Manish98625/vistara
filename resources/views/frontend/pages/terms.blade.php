@extends('layouts.app')

@section('title', 'Terms and Conditions | Vistara Education')
@section('meta_description', 'Read the terms and conditions for using Vistara Education services, including our policies on fees, user responsibilities, and data protection.')
@section('canonical', url()->current())

@section('content')
<section class="section page-header-padding" style="min-height: 70vh;">
    <div class="container">
        <h1 class="reveal">Terms and Conditions</h1>
        <p class="reveal" style="color: var(--text-muted); margin-bottom: 40px; text-align: center;">Last updated: January 2026</p>

        <div class="glass reveal" style="padding: 40px; border-radius: 15px; max-width: 900px; margin: 0 auto;">
            <h3 style="margin-bottom: 15px;">1. Introduction</h3>
            <p style="margin-bottom: 25px;">Welcome to Vistara Education Pvt. Ltd. By accessing our website and using our services, you agree to be bound by these Terms and Conditions. Please read them carefully.</p>

            <h3 style="margin-bottom: 15px;">2. Services Provided</h3>
            <p style="margin-bottom: 25px;">We provide educational consulting, career counseling, university admission assistance, and visa guidance. We act as facilitators and do not guarantee admission or visa approval, as those decisions rest solely with the respective universities and embassies.</p>

            <h3 style="margin-bottom: 15px;">3. User Responsibilities</h3>
            <p style="margin-bottom: 25px;">You agree to provide accurate and truthful information regarding your academic history, financial status, and personal details. Any false information may result in the immediate termination of our services and potential legal consequences with immigration authorities.</p>

            <h3 style="margin-bottom: 15px;">4. Fees and Payments</h3>
            <p style="margin-bottom: 25px;">All processing fees and service charges are non-refundable unless explicitly stated in a separate written agreement. Test preparation fees must be paid in full prior to the commencement of classes.</p>

            <h3 style="margin-bottom: 15px;">5. Privacy and Data Protection</h3>
            <p style="margin-bottom: 25px;">Your personal data is protected in accordance with our Privacy Policy. We will not share your sensitive information with third parties without your explicit consent, except where required for university applications or visa processing.</p>

            <h3 style="margin-bottom: 15px;">6. Amendments</h3>
            <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of the new terms.</p>
        </div>
    </div>
</section>
@endsection
