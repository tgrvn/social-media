@props(['name'])

<div class="form-check form-switch">
    <label class="form-check-label" for="name">{{$slot}}</label>
    <input class="form-check-input" name="name" type="checkbox" id="name">
</div>
