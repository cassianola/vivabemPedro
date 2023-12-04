@extends('layout.layout')

@section('title', 'Modalidade')

@section('conteudo')




   <!--==============================
    Trilha de Navegação
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="../assets/img/bg/breadcrumb-bg.png">
        <!-- Imagem de fundo animada -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Plano de Preços</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">INÍCIO</a></li>
                            <li class="active">PLANO DE PREÇOS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--==============================
    Pricing plan Area
    ==============================-->
    <div class="pricing-area space">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Plano de Preços</h3>
                <h2 class="sec-title">Nosso Plano de Preços</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="../assets/img/icon/picing-icon_1-1.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Associação Básica</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>19<span class="duration">/mês</span></h4>
                        <p class="pricing-card_content">Esta categoria geralmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinos</li>
                                <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha Este Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="../assets/img/icon/picing-icon_1-2.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Associação Padrão</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>39<span class="duration">/mês</span></h4>
                        <p class="pricing-card_content">Esta categoria geralmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinos</li>
                                <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha Este Plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="../assets/img/icon/picing-icon_1-3.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Associação Ultimate</h3>
                        <h4 class="pricing-card_price"><span class="currency">R$</span>69<span class="duration">/mês</span></h4>
                        <p class="pricing-card_content">Esta categoria geralmente oferece acesso às instalações e equipamentos da academia. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 treinos</li>
                                <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                                <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Escolha Este Plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="../assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Venha para nossa academia</span>
                            <h2 class="sec-title text-white">Modalidades!!!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Agendar sua aula</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de Ajuda?</p>
                                    <a class="about-info-link" href="tel:+5511992484207">(11) 99248-4207</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <!--==============================
    Área de Blog
    ==============================-->
    <section class="blog-area space">
        <div class="container">

            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="../assets/img/blog/blog_1_1.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="../assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Pilates</a></h3 li>
                            <p class="blog-text">Essas adesões especializadas são projetadas para tornar o fitness acessível e acessível para esses públicos específicos...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="../assets/img/blog/blog_1_2.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="../assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></h3>
                            <p class="blog-text">
                                A musculação oferece benefícios como o aumento da massa muscular, melhoria da força, densidade óssea e metabolismo. Além disso, auxilia na prevenção de lesões, promove melhor postura e contribui para a saúde geral do sistema musculoesquelético.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="../assets/img/blog/blog_1_3.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="../assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/yoga') }}">Yoga</a></h3>
                            <p class="blog-text">O yoga oferece benefícios físicos, como melhoria da flexibilidade e fortalecimento muscular, além de promover relaxamento mental e redução do estresse, contribuindo para o equilíbrio geral do corpo e da mente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="../assets/img/blog/blog_1_2.png" alt="imagem do blog">
                        </div>
                        <div class="blog-content" data-bg-src="../assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="{{ url('/modalidade/aerobica') }}">Aerobica</a></h3>
                            <p class="blog-text">
                                Os exercícios aeróbicos, como a aeróbica, proporcionam benefícios cardiovasculares, fortalecimento do sistema respiratório e queima de calorias, contribuindo para a saúde do coração, aumento da resistência e controle de peso.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

@endsection
