@props(['href' => '#', 'title' => '', 'ariaLabel' => ''])

<a href="{{ $href }}" title="{{ $title }}" aria-label="{{ $ariaLabel }}">
    {{ $slot }}
</a>
