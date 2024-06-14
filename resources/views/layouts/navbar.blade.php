<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">My Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    @auth
                        @if(Auth::user()->role_id == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="/post">Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/akun">Akun</a>
                            </li>
                        @elseif(Auth::user()->role_id == 2)
                            <li class="nav-item">
                                <a class="nav-link" href="/post">Post</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                @auth
                    <form class="d-flex" action="/logout" method="post">
                        @csrf
                        @if(Auth::user()->role_id == 1)
                            <button class="btn btn-outline-light" type="submit">Logout Admin</button>
                        @elseif(Auth::user()->role_id == 2)
                            <button class="btn btn-outline-light" type="submit">Logout Author</button>
                        @endif
                    </form>
                @endauth
                @guest
                    <a class="btn btn-outline-light" href="/login">Login</a>
                @endguest
            </div>
        </div>
    </nav>