<nav class="navbar navbar-expand-md navbar-dark bg-danger border-bottom shadow-s">
    <div class="container">
        <a class="navbar-brand" href="{{route('index.home')}}"><strong>Ecommerce Online</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
            aria-label="Abrir menu de navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('index.home')}}" class="nav-link text-white">Principal</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('info.privacidade') }}" class="nav-link text-white">Politica de privacidade</a>
                </li>
            </ul>
            <div class="align-self-start">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('login.create')}}" class="nav-link text-white">Quero me cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login.index')}}" class="nav-link text-white">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>