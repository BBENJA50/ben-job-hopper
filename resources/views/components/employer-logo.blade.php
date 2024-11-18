@props(['employer', 'width' => '90'])
<img src="{{ asset($employer->logo) }}" alt="employer_logo" class="rounded-xl" width="{{ $width }}">
