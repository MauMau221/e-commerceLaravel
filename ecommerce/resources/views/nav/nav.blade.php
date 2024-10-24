<header>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-dark navbar-expand-lg flex-column align-items-stretch">
            <div class="d-flex justify-content-center">
                <div class="mr-auto">
                    <a class="navbar-brand" href="{{ route('index.home') }}"><img src="/css/image/logo.png" width="35"
                            height="40" alt=""> Ryzer </a>
                </div>

                <div class="">
                    <form class="form-inline p-2">
                        <input class="form-control form-control-sm mr-sm-1 " type="search" placeholder="Pesquisar"
                            aria-label="Pesquisar">
                        <button class="btn btn-sm btn-outline-secondary my-2 my-sm-0" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <div class="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link mt-1" href="{{ route('login.index') }}"><i class="fa-solid fa-user fa-xl"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-1" href="{{ route('login.index') }}"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="">
                <ul class="navbar-nav mr-auto justify-content-center">
                    <li class="nav-item active p-1 mx-3 ">
                        <a class="nav-link" href="{{ route('index.home') }}">Home</a>
                    </li>
                    <li class="nav-item active p-1 mx-3">
                        <a class="nav-link" href="#">Suplementos</a>
                    </li>
                    <li class="nav-item active p-1 mx-3">
                        <a class="nav-link" href="#">Creatina</a>
                    </li>
                    <li class="nav-item active p-1 mx-3">
                        <a class="nav-link" href="#">Pré-treino</a>
                    </li>
                    <li class="nav-item active p-1 mx-3">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
