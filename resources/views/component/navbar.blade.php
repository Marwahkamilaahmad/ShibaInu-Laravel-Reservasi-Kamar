
    <nav class=" d-flex navbar navbar-expand-lg bg-light">
        <div class="container-fluid text-dark">
            <a class="navbar-brand text-dark" href="#">Reservasi Kamar Rawat Inap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse text-dark" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/docs') }}">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/create-flk') }}">Create</a>
                    </li>
                </ul>
                <form class="d-flex" action="{{ url('/search') }}" method="GET">
                    <input class="form-control mr-3 w-5" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
    </nav>


