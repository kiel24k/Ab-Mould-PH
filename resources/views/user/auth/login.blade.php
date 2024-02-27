@extends('user.main')
@section('user')
    <section class="login-main">

        <div class="col">
            <div class="login-content">
                <div class="login-title">
                    <h3>Ab Mould PH</h3>
                    <b>Log in to your account</b>
                    <p>Lorem ipsum dolor sit amet consectetur!</p>
                </div>
                <div class="login-input">
                    <form action="">
                        <input type="text" placeholder="Email" autofocus>
                        <input type="text" placeholder="Password" autofocus>

                        <div class="login-action">
                            <a href="">Forgot password</a>
                            <button class="btn">
                                <b>Log in</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>

    </section>
@endsection
