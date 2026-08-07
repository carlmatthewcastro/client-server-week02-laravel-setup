@props(['href' => '#', 'title' => '', 'ariaLabel' => '', 'target' => '_blank'])

<a href="{{ $href }}" title="{{ $title }}" aria-label="{{ $ariaLabel }}" target="{{ $target }}" rel="noopener noreferrer">
    {{ $slot }}
</a>
