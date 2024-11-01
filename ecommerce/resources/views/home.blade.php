@extends('master')

@section('content')
    <div id="ads" class="carousel slide m-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 mx-auto" src="css/image/testemax.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 mx-auto" src="css/image/max2.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 mx-auto" src="css/image/max3.jpg" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#ads" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#ads" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-3">
            @foreach ($itens as $item)
                <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="css/image/image.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nome }}</h5>
                            <p class="card-text">
                                {{ strlen($item->desc) > 30 ? substr($item->desc, 0, 30) . '...' : $item->desc }}</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endsection
