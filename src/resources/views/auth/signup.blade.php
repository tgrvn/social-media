@extends('core')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <x-auth.form heading="Sign Up" description="Enter your email and password to register"
                                 action="/sign" method="post">
                        <div class="mb-3">
                            <x-form.input type="text" name="name">
                                Name
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="text" name="last">
                                Last name
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="email" name="email">
                                Email
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="password" name="password">
                                Password
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="password" name="password_confirmation">
                                Password confirm
                            </x-form.input>
                        </div>

                        <x-form.checkbox name="agree">
                            I agree the <a href="#"
                                           class="text-dark font-weight-bolder">Terms and
                                Conditions</a>
                        </x-form.checkbox>

                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign
                                up
                            </button>
                        </div>

                        @slot('footer')
                            <x-auth.link href="/signin" link-text="Sign In">
                                Already have an account?
                            </x-auth.link>
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
