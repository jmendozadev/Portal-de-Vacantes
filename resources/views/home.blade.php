<!-- Extiende del layout principal -->
@extends('layouts.index-layout')

<!-- Título de la página -->
@section('title', 'Bolsa De Trabajo Empléate')

<!-- Estilos personalizados -->
@push('styles')
    <style>
        .search-bar input, .search-bar select, .search-bar button {
            border-radius: 50px;
            padding: 10px 20px;
        }
        .links a {
            text-decoration: none;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.694), rgba(0, 0, 0, 0.671)), url('/images/bg-home.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        .footer {
            background: #f8f9fa;
            padding: 30px 0;
            text-align: center;
        }
        .logo-coatza {
            margin-bottom: 40px;
        }
        .social-icons a {
            /* separa los iconos con margin */
            margin: 0 10px;
        }
    </style>
@endpush

@section('header')
    <!-- Header -->
        <div class="container d-flex justify-content-between align-items-center">
            <img src="images\logo.png" alt="Logo" height="60">
            <nav class="links">
                <a href="#" class="text-white mx-2">INICIO</a>
                <a href="#" class="text-white mx-2">LISTA DE EMPLEOS</a>
                <a href="#" class="text-white mx-2">EMPRESAS</a>
                <a href="#" class="text-white mx-2">CONTACTO</a>
                <a href="#" class="btn btn-danger text-white mx-2">REGÍSTRATE</a>
            </nav>
        </div>
@endsection

    <!-- Hero Section -->
@section('content')
    <section class="hero-section">
        <div class="container">
            <h1>Bolsa De Trabajo Emplé@te</h1>
            <p>H. Ayuntamiento de Coatzacoalcos, Ver.</p>
            <div class="search-bar d-flex justify-content-center mt-4">
                <select class="form-select me-2" style="max-width: 300px;">
                    <option selected>Seleccionar Categoría</option>
                </select>
                <select class="form-select me-2" style="max-width: 300px;">
                    <option selected>Seleccionar Municipio</option>
                </select>
                <button class="btn btn-warning">Buscar</button>
            </div>
        </div>
    </section>
@endsection

    <!-- Footer -->
@section('footer')
        <div class="container">
            <img src="/images/coatza-logo.png" alt="Coatzacoalcos" height="100" class="logo-coatza">
            <div class="social-icons mt-3">
                <a href="#"><img src="/images/facebook-icon.png" alt="Facebook" width="40"></a>
                <a href="#"><img src="/images/tiktok-icon.png" alt="TikTok" width="40"></a>
                <a href="#"><img src="/images/x-icon.png" alt="Twitter" width="40"></a>
                <a href="#"><img src="/images/whatsapp-icon.png" alt="WhatsApp" width="40"></a>
                <a href="#"><img src="/images/youtube-icon.png" alt="YouTube" width="40"></a>
            </div>
        </div>
@endsection