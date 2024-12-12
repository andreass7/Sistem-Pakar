@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'text-sm/6 font-semibold  bg-green-200' : 'text-sm/6 font-semibold text-gray-900' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-green-200 group"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
