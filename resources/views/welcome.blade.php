@extends('layout.app')

@section('content')
       <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky bg-transparent header-light">
                <div class="un-item-logo">
                    <a href="/" class="logo">
                        <img class="logo-img" src="/images/logo.png" alt="">
                        <span class="logo-text">Sydicatefx
                    </a>
                </div>
            </header>
            <!-- ===================================
              START INFO ABOUT THE TEMPLATE
            ==================================== -->
            <section class="un-info-template">
                <div class="main-img-nft">
                    <picture>
                        <source srcset="images/other/3d_nfts.webp" type="image/webp">
                        <img src="/images/other/3d_nfts.png" alt="nft picture">
                    </picture>
                </div>

            </section>
            <!-- ===================================
              START PAGES LIST
            ==================================== -->
            <section class="un__listPages_started margin-t-30">
                <div class="content">
                    <div class="title">
                        <h3>Syndicate fx marketplace</h3>
                        <p>
                            Subscribe to reputable sources and <span>trusted</span> professionals, you can receive daily signals across a wide range of <span>trading</span>.
                        </p>
                    </div>
                </div>
            </section>

            <section class="bloack-get-started">
                <div class="un-navMenu-default p-0">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/login"
                                class="nav-link bg-transparent">
                                <div class="item-content-link">
                                    <div class="icon text-white">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <h3 class="link-title text-white">Login</h3>
                                </div>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link bg-primary">
                                <div class="item-content-link">
                                    <div class="icon text-white">
                                        <i class="ri-home-5-fill"></i>
                                    </div>
                                    <h3 class="link-title text-white">Get Started</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text text-white"></span>
                                    <div class="icon-arrow text-white">
                                        <i class="ri-arrow-drop-right-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/register" class="nav-link bg-transparent">
                                <div class="item-content-link">
                                    <p class="link-title text-white">Apply to give signals</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
@endsection
