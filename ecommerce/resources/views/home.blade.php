@extends('master')

@include('nav.nav')

@section('title', 'Home')
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
        <div class="swiper-wrapper">
            @foreach ($itens->take(6) as $item)
                <div class="swiper-slide">
                    <div class="card" style="width: 23rem;">
                        <img class="card-img-top" src="css/image/image.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nome }}</h5>
                            <div class="mb-2">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <strong>R$ {{ $item->preco }}</strong>
                                    </div>
                                    <div class="">
                                        <span></span>
                                    </div>
                                    <div class="">s</div>
                                </div>
                                <div>
                                    <a href="#" class=""><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination justify-content-center mt-3"></div>
    </div>
    <div class="d-flex flex-column bd-highlight mb-3 p-2 m-2">
        <div class="p-2 itemteste bd-highlight">Flex item 1</div>
        <div class="p-2 itemteste bd-highlight">Flex item 2</div>
        <div class="p-2 itemteste bd-highlight">Flex item 3</div>
    </div>
    <div class="d-flex justify-content-center">
        {{-- {{ $itens->links('pag.paginate') }} Caso precise ativar paginação, em conjunto com o blade paginate MATERIALIZE --}}
    </div>
@endsection
