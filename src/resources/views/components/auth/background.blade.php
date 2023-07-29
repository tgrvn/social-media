@props(['imagePath', 'heading'])

<div
    class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
    <div
        class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
        <img src="{{asset('assets/img/shapes/pattern-lines.svg')}}" alt="pattern-lines"
             class="position-absolute opacity-4 start-0">
        <div class="position-relative">
            <img class="max-width-500 w-100 position-relative z-index-2"
                 src="{{asset($imagePath)}}" alt="chat-img">
        </div>
        <h4 class="mt-5 text-white font-weight-bolder">{{$heading}}</h4>
        <p class="text-white">{{$slot}}</p>
    </div>
</div>
