<header class="flex col-10">
    <figure>
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
    </figure>

    <nav class="h-100">
        <ul class="flex h-100">
            @foreach ($menus as $link)
            <li class="h-100 flex align-center">
                <a href="{{ $link['link'] }}" >{{ $link['name'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>