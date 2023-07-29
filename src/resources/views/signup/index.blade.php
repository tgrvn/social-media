@extends('core')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <x-auth.form heading="Sign Up" description="Enter your email and password to register"
                                 action="/sign" method="post">

                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name"
                                   aria-label="Name">
                        </div>

                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email"
                                   aria-label="Email">
                        </div>

                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password"
                                   aria-label="Password">
                        </div>

                        <div class="form-check form-check-info text-left">
                            <input class="form-check-input" type="checkbox" value=""
                                   id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="#"
                                               class="text-dark font-weight-bolder">Terms and
                                    Conditions</a>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign
                                up
                            </button>
                        </div>

                        @slot('footer')
                            <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                <p class="mb-4 mx-auto">
                                    Already have an account?
                                    <a href="/signin" class="text-primary text-gradient font-weight-bold">Sign
                                        in</a>
                                </p>
                            </div>
                        @endslot
                    </x-auth.form>

                    <x-auth.background heading="Your journey starts here"
                                       image-path="assets/img/illustrations/rocket-white.png">
                        Just as it takes a company to sustain a product, it takes a community to sustain a protocol.
                    </x-auth.background>
                </div>
            </div>
        </section>
    </main>
@endsection
