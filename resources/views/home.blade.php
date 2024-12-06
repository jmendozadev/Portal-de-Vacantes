<!-- Extiende del layout principal -->
@extends('layouts.index-layout')

<!-- Título de la página -->
@section('title', 'Bolsa De Trabajo Empléate')

<!-- Estilos personalizados -->
@push('styles')
    <link rel="preload" href="{{ asset('css/style.css') }} as="style">
    <link rel="stylesheet" href="{{ asset('css/homepage-style.css') }}">
@endpush

@section('header')
    <!-- Header -->
        <div class="container header d-flex justify-content-between align-items-center">
            <div class="logo-header">
                <img src="images\logo.png" alt="Logo" height="60">
            </div>
            <nav class="links d-flex flex-wrap justify-content-center">
                <a href="#" class="text-white mx-2">INICIO</a>
                <a href="#" class="text-white mx-2">LISTA DE EMPLEOS</a>
                <a href="#" class="text-white mx-2">EMPRESAS</a>
                <a href="#" class="text-white mx-2">CONTACTO</a>
                <div>
                    <a href="#" class="btn bg-white text-white mx-1">
                        <img src="images\login-icon.png" alt="Login" width="20">
                    </a>
                    <a href="#" class="btn btn-danger text-white mx-1">REGÍSTRATE</a>
                </div>
            </nav>
        </div>
@endsection

    <!-- Hero Section -->
    @section('content')
        <section class="hero-section">
            <div class="container">
                <div class="hero-caption">
                    <h1>Bolsa De Trabajo Emplé@te</h1>
                    <p>H. Ayuntamiento de Coatzacoalcos, Ver.</p>
                </div>
                <div class="search-bar d-flex justify-content-center mt-4">
                    <select class="form-select me-2" style="max-width: 400px;">
                        <option selected>Seleccionar Categoría</option>
                    </select>
                    <select class="form-select me-2" style="max-width: 400px;">
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
            <div class="social-icons mt-5">
                <a href="#"><img src="/images/facebook-icon.png" alt="Facebook" width="40"></a>
                <a href="#"><img src="/images/tiktok-icon.png" alt="TikTok" width="40"></a>
                <a href="#"><img src="/images/x-icon.png" alt="Twitter" width="40"></a>
                <a href="#"><img src="/images/whatsapp-icon.png" alt="WhatsApp" width="40"></a>
                <a href="#"><img src="/images/youtube-icon.png" alt="YouTube" width="40"></a>
            </div>
        </div>
@endsection