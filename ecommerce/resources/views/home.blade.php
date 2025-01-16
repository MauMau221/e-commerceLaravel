@extends('master')

@section('content')
    @include('nav.nav')

    @include('header.header')

    <main class="mb-5 pb-5 mb-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <form action="" class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Digite o que procura">
                            <button class="btn btn-danger btn-sm btn-sm">
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
            <hr class="mt-3">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <div>
                                <button class="btn btn-light disabled">
                                    <small>Reabastecendo Estoque</small>
                                </button>
                            </div>
                            <small class="text-danger">Produto Esgotado</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch my-2">
                    <div class="card text-center bg-light">
                        <a href="#" class="position-absolute custom-position p-3 text-danger">
                            <i class="fa-regular fa-heart fa-2xl"></i>
                        </a>
                        <img src="/css/image/card/image.png" class="card-img-top">
                        <div class="card-header">
                            R$4,50
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Creatina</h5>
                            <p class="card-text encurtar-3l">Creatina com betalamina e mix de pré treino</p>
                        </div>
                        <div class="card-footer">
                            <form action="" class="d-block">
                                <button class="btn btn-danger btn-sm">
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <small class="text-success">320,5kg em estoque</small>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-3">
            <div class="row pb-4">
                <div class="col-12">
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
