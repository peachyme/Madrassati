<nav class="navbar navbar-expand-lg fixed-top py-2 px-3 pe-5 navbar-custom" id="scrollnavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <span><img src="/images/logoo.png" alt="" width="150" height="40" class="me-3"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item text-end pe-3">
                            <a href="{{ route('home') }}" class="nav-link {{'/' == request()->path() ? 'activee' : ''}}"><strong>Accueil</strong></a>
                        </li>
                        <li class="nav-item text-end pe-3">
                            <a href="{{ route('candidat.dossier') }}" class="nav-link {{'MonDossier' == request()->path() ? 'activee' : ''}}"><strong>Mon Dossier</strong></a>
                        </li>
                        <li class="nav-item text-end pe-3">
                            <a href="{{ route('candidat.candidatures') }}" class="nav-link {{('MesCandidatures' == request()->path()) || ('MaCandidature' == request()->path()) ? 'activee' : ''}}"><strong>Mes Candidatures</strong></a>
                        </li>
                        <li class="nav-item dropdown text-end pe-3">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <strong>{{ Auth::user()->name }}</strong>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item text-end pe-3">
                        <a href="{{ route('home') }}" class="nav-link {{'/' == request()->path() ? 'activee' : ''}}"><strong>Accueil</strong></a>
                        </li>
                        <li class="nav-item text-end pe-3">
                            <a href="{{ route('login') }}" class="nav-link {{'login' == request()->path() ? 'activee' : ''}}"><strong>Log in</strong></a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item text-end pe-3">
                                <a href="{{ route('register') }}" class="nav-link {{'register' == request()->path() ? 'activee' : ''}}"><strong>Register</strong></a>
                            </li>
                        @endif
                    @endauth
        </div>
        @endif
        </ul>
    </div>
    </div>
</nav>
