<header>
    @section('header')
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits.
                            Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Pages</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
                            <li><a href="{{ route('page.about') }}" class="text-white">About</a></li>
                            <li><a href="{{ route('posts.create') }}" class="text-white">Create Page</a></li>
                            <li><a href="{{ route('send') }}" class="text-white">Send Email</a></li>
                            <li><a href="{{ route('register.create') }}" class="text-white">Registration</a></li>
                            <li><a href="{{ route('login.create') }}" class="text-white">Login</a></li>
                            <li><a href="{{ route('logout') }}" class="text-white">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                         viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                        <circle cx="12" cy="13" r="4"/>
                    </svg>
                    <strong>Home</strong>
                </a>

                @auth
                    <a href="{{ route('page.about') }}" class="navbar-brand d-flex align-items-center">
                        <strong>About</strong>
                    </a>
                    <a href="{{ route('posts.create') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Create Page</strong>
                    </a>
                    <a href="{{ route('send') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Send Email</strong>
                    </a>
                    <a href="{{ route('logout') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Logout</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a href="#" class="navbar-brand d-flex align-items-center">
                        Welcome {{ auth()->user()->name }}
                        @if(auth()->user()->avatar)
                            <img src="{{asset('storage/' . auth()->user()->avatar)}}" alt="avatar" height="40px">
                        @endif
                    </a>
                @endauth

                @guest()
                    <a href="{{ route('register.create') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Registration</strong>
                    </a>
                    <a href="{{ route('login.create') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Login</strong>
                    </a>
                @endguest
            </div>
        </div>
    @show
</header>
