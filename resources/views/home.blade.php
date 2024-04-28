@extends('layouts._base')

@section('pageTitle')
    Accueil
@endsection
@section('selfCss')
<link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
@endsection



@section('navigation')
@include('layouts._header')
@endsection

@section('contentForView')
      <!-- Modal -->
      <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active bg-fond">
                <div class="container">
                    <div class="row  p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('img/panier.png')}}" id="panier-img" alt="panier">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex  align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-white"> Découvrez les saveurs authentiques de l'Afrique au Sénégal</h1>
                                <h3 class="h2 text-white">Une expérience culinaire inoubliable vous attend</h3>
                                <button type="button" class="btn btn-secondary bg-btn">Découvrir nos produits</button>

                                {{-- <p>
                                    Nous sommes votre passerelle vers les délices culinaires de la sous-région africaine,
                                     directement livrés à votre porte au Sénégal. <br>
                                     Que vous soyez à la recherche d'épices exotiques, de sauces traditionnelles,
                                      de céréales nourrissantes ou de collations savoureuses, notre boutique en ligne est votre destination incontournable.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item second-slide">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left mt-5">
                                
                                <button type="button" class=" btn btn-secondary bg-btn">Découvrir l'évènement</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Slider 3</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    Lorem, ipsum dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">

            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>

    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories du Mois</h1>
                {{-- <p>
                   xxxxxxxxxx
                </p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('img/epices.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">La Box Epice et <br> Sauce</h5>
                <p class="text-center"><a class="btn btn-success">Voir</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('img/cereale.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Produits à base de Céréale</h2>
                <p class="text-center"><a class="btn btn-success">Voir</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{asset('img/amusegueule.png')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Les Amuses-Gueules</h2>
                <p class="text-center"><a class="btn btn-success">Voir</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produit en vedette</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('img/tigaDaigai.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">800F /Kg</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Pâte Arachide</a>
                            <p class="card-text">
                                xxxxxxxxx
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('img/manioc.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">450F /Kg</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Lot de Manioc</a>
                            <p class="card-text">
                                xxxxxxxxxx
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('img/avocat.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">650f /Kg</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Avocat</a>
                            <p class="card-text">
                                xxxxxxxxxx
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
@include('layouts._footer')

@endsection