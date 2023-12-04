@extends('layout.layout')

@section('title', 'Modalidade - Musculacao')

@section('conteudo')

 <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="../assets/img/bg/breadcrumb-bg.png">
        <!-- Imagem animada de fundo/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Nossas Noticias</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ asset('/') }}">INÍCIO</a></li>
                            <li class="active">PÁGINA DE NOTICIA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--==============================
    Área de Serviço 02
==============================-->
<div class="service-area-2 space overflow-hidden">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Aula na Academia</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Levantamento de Peso</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Musculação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-4.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Aula de Boxe</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-5.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Aula de Yoga Fitness</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-6.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Aula de Meditação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
