@props(['active' => false])

<a class="{{ $active ? 'bg-gray-700' : 'font-bold hover:bg-gray-700' }} rounded-md px-3 py-2"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
