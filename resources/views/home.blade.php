@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #ff9966, #ff5e62);
    }

    .dashboard-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin-top: 80px;
    }

    .dashboard-header {
        font-weight: bold;
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .alert-success {
        border-radius: 8px;
        font-size: 0.95rem;
        margin-bottom: 20px;
    }

    .dashboard-body {
        font-size: 1.1rem;
        color: #555;
        text-align: center;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="dashboard-card">
                <div class="dashboard-header">
                    {{ __('Panel de Usuario') }}
                </div>

                <div class="dashboard-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión correctamente!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
