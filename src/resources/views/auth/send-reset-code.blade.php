@extends('core')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <x-auth.form heading="Reset password" description="You will receive an e-mail in maximum 60 seconds"
                                 action="/send-code" method="post">
                        <div class="mb-3">
                            <x-form.input type="email" name="email">
                                Email
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="text" name="verify_code">
                                Verification Code
                            </x-form.input>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-primary btn-lg w-100 my-4">
                                Send
                            </button>
                        </div>

                        @slot('footer')
                            <x-auth.link href="/signup" link-text="Sign up">
                                Back to
                            </x-auth.link>
                        @endslot
                    </x-auth.form>

                    <x-auth.background image-path="assets/img/illustrations/lock.png" heading="Soft UI Design">
                        Just as it takes a company to sustain a product, it takes a
                        community to sustain a protocol.
                    </x-auth.background>
                </div>
            </div>
        </section>
    </main>
@endsection

