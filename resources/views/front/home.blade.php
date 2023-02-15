@extends('front_layout.master')

@section('title')
    Accueil
@endsection

@section('content')
    <!-- Slider de la Home Page-->
    <section class="sectionOne">
        <div id="carouselHomePage" class="carousel slide carousel-fade shadow-lg" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $slider)
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/slider_images/' . $slider->image) }}" class="d-block w-100"
                            alt="{{ $slider->description1 }}" />
                        <div class="carousel-caption d-none d-lg-block">
                            <h5>{{ $slider['title'] }}</h5>
                            <p>
                                {{ $slider['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sectionThree px-4 mt-4">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4">
                    <div class="card card01 shadow-lg border-0 h-100">
                        <div class="border-bottom">
                            <img class="img-fluid w-100" src="{{ asset('storage/article_images/' . $article->article_image) }}"
                                alt="{{ $article->article_title }}" />
                        </div>
                        <div class="card-body bg-dark text-white d-flex flex-column">
                            <h5 class="card-title">{{ $article['article_title'] }}</h5>
                            <p class="card-text">
                                {{ $article['article_shortdescription'] }}
                            </p>
                            <a class="btn btn-outline-danger mt-auto" href="{{ url('/article', [$article->id]) }}" target="_self">
                                Voir la procédure
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
@endsection