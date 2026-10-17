@props(['href' => '#', 'title' => '', 'ariaLabel' => '', 'target' => '_blank'])

<a {{ $attributes->merge(['href' => $href, 'title' => $title, 'aria-label' => $ariaLabel ?: $title, 'target' => $target, 'rel' => 'noopener noreferrer']) }}>
    {{ $slot }}
</a>
