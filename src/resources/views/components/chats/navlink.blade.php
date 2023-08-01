@props(['modal' => false, 'name'])

@php
    if ($modal) {
        $attributes['data-bs-toggle'] = 'modal';
        $attributes['data-bs-target'] = '#' . $name;
    }
@endphp

<li class="nav-item">
    <button {{$attributes}} class="nav-link mb-0 px-0 py-1 align-items-center d-flex justify-content-center">

        {{$svg}}

        <span class="ms-1 px-1">{{ucwords($name)}}</span>
    </button>
</li>


