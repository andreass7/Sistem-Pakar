@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'text-sm/6 font-semibold text-green-600' : 'text-sm/6 font-semibold text-gray-900' }} hover:text-green-600 transition-all"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
