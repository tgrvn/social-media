<div class="container-fluid">
    <div class="page-header min-height-100 border-radius-xl mt-4"
         style="background-image: url({{asset('assets/img/curved-images/curved0.jpg')}}); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{asset('assets/img/bruce-mars.jpg')}}" alt="profile_image"
                         class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        John Doe
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Happy today
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper end-0">
                    <ul class="nav nav-pills nav-fill p-1 bg-transparent">
                        <x-chats.navlink :modal="true" name="profile">
                            @slot('svg')
                                <i class="ni ni-settings-gear-65"></i>
                            @endslot
                        </x-chats.navlink>

                        <x-chats.navlink :modal="true" name="invite">
                            @slot('svg')
                                <i class="ni ni-send"></i>
                            @endslot
                        </x-chats.navlink>

                        <x-chats.navlink name="logout">
                            @slot('svg')
                                <i class="ni ni-button-power"></i>
                            @endslot
                        </x-chats.navlink>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<x-modal name="profile"/>
<x-modal name="invite"/>

