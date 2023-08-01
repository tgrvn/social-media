@extends('core')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <x-auth.form heading="Sign In" description="Enter your email and password to sign in"
                                 action="/signin" method="post" action="/signin" method="post">
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

                        <x-form.switch>
                            Remember me
                        </x-form.switch>

                        <div class="text-center">
                            <button type="button"
                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign
                                in
                            </button>
                        </div>

                        @slot('footer')
                            <x-auth.link href="/signup" link-text="Sign Up">
                                Don't have an account?
                            </x-auth.link>

                            <x-auth.link href="/send-reset-code" link-text="Forgot password"/>
                        @endslot
                    </x-auth.form>

                    <x-auth.background image-path="assets/img/illustrations/chat.png"
                                       heading='"Attention is the new currency"'>
                        The more effortless the writing looks, the more effort the writer
                        actually put into the process.
                    </x-auth.background>
                </div>
            </div>
        </section>
    </main>
@endsection
