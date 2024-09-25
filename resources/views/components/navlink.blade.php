@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'active link' : 'link' }}">{{ $slot }}</a>

