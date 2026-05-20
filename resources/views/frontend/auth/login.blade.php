@extends('layouts.app')

@section('title', 'Sign In | Vistara Education')
@section('meta_description', 'Sign in to your Vistara Education Pvt. Ltd. account.')
@section('canonical', url()->current())
@section('content')
<section class="section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div style="max-width: 400px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <div style="text-align: center; margin-bottom: 25px;">
                <img src="{{ asset('assets/brand/vistara-logo-main.svg') }}" alt="Vistara Education Logo" style="height: 60px; width: auto;">
            </div>
            <h1 style="text-align: center; margin-bottom: 30px; font-family: 'Playfair Display', serif;">Sign In</h1>

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

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Email Address</label>
                    <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;" value="{{ old('email') }}">
                </div>

                <div style="margin-bottom: 12px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">Password</label>
                    <input type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                </div>

                <div style="text-align: right; margin-bottom: 22px;">
                    <a href="{{ route('password.request') }}" style="color: var(--primary); font-weight: 600; font-size: 0.9rem;">Forgot Password?</a>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px;">Sign In</button>
            </form>

            <p style="text-align: center; margin-top: 20px;">Don't have an account? <a href="{{ route('register') }}" style="color: var(--primary); font-weight: 600;">Sign Up</a></p>
        </div>
    </div>
</section>
@endsection
