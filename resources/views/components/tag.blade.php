@if($tag && isset($tag->name))
    <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $tag->name }}">
        {{ $tag->name }}
    </a>
@endif
