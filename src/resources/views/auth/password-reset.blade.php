@extends('core')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <x-auth.form heading="Reset password" description="You will receive an e-mail in maximum 60 seconds"
                                 action="/reset" method="post">

                        <div class="mb-3">
                            <x-form.input type="password" name="password">
                                New password
                            </x-form.input>
                        </div>

                        <div class="mb-3">
                            <x-form.input type="password" name="password_confirmation">
                                Confirm new password
                            </x-form.input>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-primary btn-lg w-100 my-4">
                                Change password
                            </button>
                        </div>
                    </x-auth.form>

                    <x-auth.background image-path="assets/img/illustrations/dark-lock-ill.png"
                                       heading="Attention is the new currency">
                        The more effortless the writing looks, the more effort the writer actually put into the process.
                    </x-auth.background>
                </div>
            </div>
        </section>
    </main>
@endsection

