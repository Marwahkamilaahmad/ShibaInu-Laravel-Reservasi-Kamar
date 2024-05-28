
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/create-flk') }}">FLK</a></li>
                            <li><a class="dropdown-item" href="{{ url('/create-fdk') }}">FDK</a></li>
                            <li><a class="dropdown-item" href="{{ url('/create-kasur') }}">Kasur</a></li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Create
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/create-flk') }}">FLK</a></li>
                            <li><a class="dropdown-item" href="{{ url('/create-fdk') }}">FDK</a></li>
                            <li><a class="dropdown-item" href="{{ url('/create-kasur') }}">Kasur</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </nav>


