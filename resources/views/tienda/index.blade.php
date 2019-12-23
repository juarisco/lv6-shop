@extends('layouts.template')

@section('title', 'J-Shop')

@section('content')

    <br>

    <br>

    <br>

    <!-- En oferta -->

    <div class="lomasvendidocontenedor">
        <div class="section_title text-center">En oferta</div>
        <br>
        <div class="lomasvendido owl-carousel owl-theme">

            <!-- item-->

            <div class="">
                <div class="product">
                    <span class="badge-offer"><b> - 50%</b></span>
                    <div class="product_image"><img src="{{ asset('assets/images/product_5.jpg') }}" alt=""></div>
                    <div class="product_content">
                        <div class="product_info">
                            <div>
                                <div>
                                    <div class="product_name product_namesinwidth text-center"><a href="product.html">Cool Clothing with Brown Stripes</a></div>

                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="product_price text-center">$3<span>.99</span><del class="price-old"> $1980.00</del></div>

                            </div>
                        </div>
                        <div class="product_buttons">
                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                    <div><div><img src="{{ asset('assets/images/cart.svg') }}" class="svg" alt=""><div>+</div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item-->
            <div class="item">
                <div class="">
                    <div class="product">
                        <span class="badge-new"><b> Nuevo</b></span>
                        <span class="badge-offer"><b> - 50%</b></span>

                        <div class="product_image"><img src="{{ asset('assets/images/product_6.jpg') }}" alt=""></div>
                        <div class="product_content">
                            <div class="product_info">
                                <div>
                                    <div>
                                        <div class="product_name product_namesinwidth text-center"><a href="product.html">Cool Clothing with Brown Stripes</a></div>

                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="product_price text-center">$3<span>.99</span><del class="price-old"> $1980.00</del></div>

                                </div>
                            </div>
                            <div class="product_buttons">
                                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div><div><img src="{{ asset('assets/images/cart.svg') }}" class="svg" alt=""><div>+</div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <br>

    <br>

    <br>

    <!-- Boxes -->

    <div class="boxes">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

                        <!-- Box -->
                        <div class="box">
                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_1.jpg') }})"></div>
                            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                <div class="box_left">
                                    <div class="box_image">
                                        <a href="category.html">
                                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_1_img.jpg') }})"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box_right text-center">
                                    <div class="box_title">Trendsetter Collection</div>
                                </div>
                            </div>
                        </div>

                        <!-- Box -->
                        <div class="box">
                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_2.jpg') }})"></div>
                            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                <div class="box_left">
                                    <div class="box_image">
                                        <a href="category.html">
                                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_2_img.jpg') }})"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box_right text-center">
                                    <div class="box_title">Popular Choice</div>
                                </div>
                            </div>
                        </div>

                        <!-- Box -->
                        <div class="box">
                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_3.jpg') }})"></div>
                            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                <div class="box_left">
                                    <div class="box_image">
                                        <a href="category.html">
                                            <div class="background_image" style="background-image:url({{ asset('assets/images/box_3_img.jpg') }})"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box_right text-center">
                                    <div class="box_title">Popular Choice</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">

                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon"><img src="{{ asset('assets/images/icon_1.svg') }}" alt=""></div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Pagos rápidos y seguros</div>
                        </div>
                    </div>
                </div>

                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon ml-auto mr-auto"><img src="{{ asset('assets/images/icon_2.svg') }}" alt=""></div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Productos de calidad</div>
                        </div>
                    </div>
                </div>

                <!-- Feature -->
                <div class="col-lg-4 feature_col">
                    <div class="feature d-flex flex-row align-items-start justify-content-start">
                        <div class="feature_left">
                            <div class="feature_icon"><img src="{{ asset('assets/images/icon_3.svg') }}" alt=""></div>
                        </div>
                        <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                            <div class="feature_title">Entrega gratis después de $100</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
