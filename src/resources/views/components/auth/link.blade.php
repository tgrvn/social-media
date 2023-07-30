@props(['href', 'description', 'linkText'])

<div class="card-footer text-center pt-0 px-lg-2 px-1">
    <p class="mb-4 text-sm mx-auto">
        {{$slot}}
        <a href="{{$href}}" class="text-primary text-gradient font-weight-bold">
            {{$linkText}}
        </a>
    </p>
</div>
