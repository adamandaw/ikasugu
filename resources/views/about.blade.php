@extends('layouts._base')

@section('pageTitle')
   Qui Sommes Nous ?
@endsection
@section('selfCss')
<link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
@endsection



@section('navigation')
@include('layouts._header')
@endsection

@section('contentForView')
<section class="bg-fond py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>Chez IKA SUGU,</h1>
                <p>
                    Nous sommes une entreprise basée au Sénégal spécialisée dans l'importation et la vente de produits alimentaires de qualité en provenance de la sous-région africaine.
                </p>
            </div>
            {{-- * --}}
        </div>
    </div>
</section>
<!-- Close Banner -->
{{-- test --}}
<div class="team">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="team-item">
            <img src="{{asset("images/team_01.jpg")}}" alt="img_person01">
            <div class="down-content">
              <h4>Fatoumata Siby</h4>
              <span>Co-Founder</span>
              <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-item">
            <img src="{{asset("images/team_02.jpg")}}" alt="img_person02">
            <div class="down-content">
              <h4>Saba Sissoko</h4>
              <span>Chief Marketing Officer</span>
              <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-item">
            <img src="{{asset("images/team_03.jpg")}}" alt="img_person03">
            <div class="down-content">
              <h4>Bintou Sidibé</h4>
              <span>Financial Analyst</span>
              <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="more-info about-info mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="more-info-content">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <div class="right-content">
                  <span>our solid background on finance</span>
                  <h2>Get to know about <em>our company</em></h2>
                  <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                  <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                  <a href="" class="filled-button">Read More</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="left-image">
                  <img src="{{asset("images/about-image.jpg")}}" alt="image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

{{-- {# start more info 2 #} --}}

  {{-- <div class="more-info about-info">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="more-info-content">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="{{asset("images/about-image.jpg")}}" alt="image">
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="right-content">
              <span>our solid background on finance</span>
              <h2>Get to know about <em>our company</em></h2>
              <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
              <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
{# end more info 2 #}


{# start more info 3  #} --}}
<div class="mt-5 more-info about-info">
{{-- test --}}
<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Nos Services</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Livraison à domicile</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                </div>
                <h2 class="h5 mt-4 text-center">Vente de produits alimentaires africains de qualité</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center">
                  <i class="fa fa-external-link-square" aria-hidden="true"></i>
                </div>
                <h2 class="h5 mt-4 text-center">Commande personnalisée</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center">
                  <i class="fa fa-ticket" aria-hidden="true"></i>

                </div>
                <h2 class="h5 mt-4 text-center">Abonnement à des paniers de produits alimentaires</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Start Brands -->
<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nos Partenaires</h1>
               
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel">
                <div class="row d-flex flex-row">
                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                          <i class="text-light fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!--End Controls-->

                    <!--Carousel Wrapper-->
                    <div class="col">
                        <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="  partenaires" src="https://learn.groupeism.sn/branding/_167_1/loginLogo/CustomLoginLogo.png?m=kmkwro2u" alt="ism Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="partenaires" src="{{asset("img/free.png")}}" alt="free Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="partenaires" src="{{asset("img/orange_logo.png")}}" alt="orange Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Second slide-->

                                <!--Third slide-->
                                {{-- <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--End Third slide-->

                            </div>
                            <!--End Slides-->
                        </div>
                    </div>
                    <!--End Carousel Wrapper-->

                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                            <i class="text-light fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brands-->

@endsection

@section('footer')
@include('layouts._footer')

@endsection