@extends('master')

@section('content')
    @include('nav.nav')

    @include('header.header')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <form action="" class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Digite o que procura">
                            <button class="btn btn-danger btn-sm">
                                Buscar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                        <form class="ml-3 d-inline-block">
                            <select class="form-select form-select-sm">
                                <option>Ordernar pelo nome</option>
                                <option>Ordernar pelo menor preço</option>
                                <option>Ordernar pelo maior preço</option>
                            </select>
                        </form>
                        <nav class="d-inline-block">
                            <ul class="pagination pagination-sm my-0">
                                <li class="page-item">
                                    <button class="page-link">1</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">2</button>
                                </li>
                                <li class="page-item disabled">
                                    <button class="page-link">3</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">4</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">5</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">6</button>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('footer.footer')
@endsection
