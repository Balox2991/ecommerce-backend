@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #ff9966, #ff5e62);
    }

    .login-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 2.5rem;
        margin-top: 80px;
    }

    .login-card .form-control {
        border-radius: 8px;
    }

    .login-header {
        font-weight: bold;
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .btn-primary {
        background-color: #ff9966;
        border: none;
    }

    .btn-primary:hover {
        background-color: #ff9966;
    }

    .form-check-label {
        font-size: 0.9rem;
        color: #555;
    }

    .login-links a {
        font-size: 0.9rem;
        color: #ff5e62;
    }

    .login-links a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-card">
                <div class="login-header">
                    {{ __('Iniciar Sesión') }}
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autofocus>

                        @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required>

                        @error('password')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Recuérdame') }}</label>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Ingresar') }}</button>
                    </div>

                    <div class="text-center login-links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

