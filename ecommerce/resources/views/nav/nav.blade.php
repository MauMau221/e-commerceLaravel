<header>
    <div class="containar">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-light justify-content-between">
            <div class="">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="/css/image/logo.png" width="40" height="45"
                        alt=""> Ryzer </a>
            </div>

            <div class="">
                <ul class="navbar-nav mr-auto aling">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link disabled" href="#">Desativado</a>
                    </li>
                </ul>
            </div>

            <div class="ml-5">
                <form class="form-inline p-2">
                    <input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Pesquisar"
                        aria-label="Pesquisar">
                    <button class="btn btn-sm btn-outline-secondary my-2 my-sm-0" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
