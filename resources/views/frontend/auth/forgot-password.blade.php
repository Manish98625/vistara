@extends('layouts.app')

@section('title', 'Forgot Password | Vistara Education')
@section('meta_description', 'Reset your Vistara Education account password.')
@section('canonical', url()->current())
@section('content')
<section class="section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 430px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h1 style="text-align: center; margin-bottom: 15px; font-family: 'Playfair Display', serif;">Forgot Password</h1>
            <p style="text-align: center; color: var(--text-muted); margin-bottom: 25px;">Enter your email and we will send you a password reset link.</p>

            @if ($errors->any())
                <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                    @foreach ($errors->all() as $error)
                        <p style="margin: 5px 0;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div style="background: #e9f9ef; border: 1px solid #bfe8ca; color: #146c2e; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div style="margin-bottom: 22px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Email Address</label>
                    <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" value="{{ old('email') }}">
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px;">Send Reset Link</button>
            </form>

            <p style="text-align: center; margin-top: 20px;"><a href="{{ route('login') }}" style="color: var(--primary); font-weight: 600;">Back to Sign In</a></p>
        </div>
    </div>
</section>
@endsection
