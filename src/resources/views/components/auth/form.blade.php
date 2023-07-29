@props(['heading', 'description', 'action', 'method'])

<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
        <div class="card card-plain">
            <div class="card-header pb-0 text-start">
                <h4 class="font-weight-bolder">{{$heading}}</h4>
                <p class="mb-0">{{$description}}</p>
            </div>
            <div class="card-body">
                <form action="{{$action}}" method="{{$method}}" role="form">
                    {{$slot}}
                </form>
            </div>

            {{$footer}}
        </div>
    </div>
</div>
