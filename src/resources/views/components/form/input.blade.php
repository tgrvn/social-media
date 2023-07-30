@props(['name', 'type'])

<input type="{{$type}}" name="{{$name}}" class="form-control form-control-lg" placeholder="{{$slot}}"
       aria-label="{{$name}}">
