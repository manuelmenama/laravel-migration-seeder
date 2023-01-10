<header>
    <nav class="d-flex align-items-center justify-content-between">
        <h2>LOGO</h2>

        <ul class="d-flex align-items-center">
            <li class="me-5">
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="me-5">
                <a  class="{{ Route::currentRouteName() === 'train' ? 'active' : ''}}" href="{{ route('train') }}">Train</a>
            </li>
            <li class="me-5">
                <a   class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about') }}">About Us</a>
            </li>
        </ul>

    </nav>
</header>
