<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="/">Home <span class="sr-only">(current)</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/kamarier">Kamarier</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/menaxher">Menaxher</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/ekonomist">Ekonomist</a> </li>
            </ul>
        </div>
    </div>
</nav>