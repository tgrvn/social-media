@props(['name'])

<div class="form-check form-check-info text-left">
    <input class="form-check-input" type="checkbox" value=""
           id="{{$name}}" checked name="{{$name}}">
    <label class="form-check-label" for="{{$name}}">
        {{$slot}}
    </label>
</div>
