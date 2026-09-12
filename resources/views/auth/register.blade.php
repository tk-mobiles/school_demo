@extends('layouts.app')

@section('content')

<style>
    body {
        background: #f4f6f9;
    }

    .register-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .register-header {
        background: linear-gradient(135deg, #36b9cc, #1c7c8c);
        color: white;
        text-align: center;
        padding: 20px;
        font-size: 24px;
        font-weight: bold;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .btn-register {
        background: #36b9cc;
        border: none;
        border-radius: 10px;
        padding: 10px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-register:hover {
        background: #1c7c8c;
    }

    .login-link {
        text-decoration: none;
        color: #36b9cc;
        font-weight: 500;
    }

    .login-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card register-card">

                <div class="register-header">
                    {{ __('Create Account') }}
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                {{ __('Full Name') }}
                            </label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Enter your full name" required
                                autofocus>

                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                {{ __('Email Address') }}
                            </label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter your email" required>

                            @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                {{ __('Password') }}
                            </label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Create password" required>

                            @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">
                                {{ __('Confirm Password') }}
                            </label>

                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="Confirm password" required>
                        </div>

                        <!-- Register Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-register">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <!-- Login Link -->
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="login-link">
                                Already have an account? Login
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection