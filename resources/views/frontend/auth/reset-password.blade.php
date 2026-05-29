@extends('layouts.app')

@section('title', 'Reset Password | Vistara Education')
@section('meta_description', 'Set a new password for your Vistara Education account.')
@section('canonical', url()->current())
@section('content')
<section class="section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 430px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h1 style="text-align: center; margin-bottom: 30px; font-family: 'Playfair Display', serif;">Reset Password</h1>

            @if ($errors->any())
                <div style="background: #fee; border: 1px solid #fcc; color: #c00; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                    @foreach ($errors->all() as $error)
                        <p style="margin: 5px 0;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Email Address</label>
                    <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" value="{{ old('email', $email) }}">
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">New Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password" id="reset-password" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                        <button type="button" class="password-toggle-btn" data-target="reset-password" aria-label="Show password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div style="margin-bottom: 25px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Confirm New Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password_confirmation" id="reset-password-confirmation" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                        <button type="button" class="password-toggle-btn" data-target="reset-password-confirmation" aria-label="Show password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px;">Reset Password</button>
            </form>
        </div>
    </div>
</section>
@endsection
