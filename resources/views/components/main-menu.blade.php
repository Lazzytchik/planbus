<nav class="main-menu">
    @foreach($links as $link => $name)
    <a href="{{ route($link) }}">
        <span class="mx-3">{{$name}}</span>
    </a>
    @endforeach
</nav>
