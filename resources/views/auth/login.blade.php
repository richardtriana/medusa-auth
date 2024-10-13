@extends('layouts.app')

{{-- <template #content> --}}
@section('content')
    <div class="container-login">
        <div class="login-box">
            <h2>
                Medusa
            </h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-box">

                    <div>
                        <input id="email" placeholder="Email" type="email"
                            class="form-cosntrol @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="input-box">
                    <div>
                        <input id="password" placeholder="Password" type="password"
                            class="form-controlz @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <dvi class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </dvi>
                        @enderror
                    </div>
                    {{-- <label for="password" class="col-sform-label text-msd-end">{{ __('Password') }}</label> --}}
                </div>

                <div class="row mb-3" style="display: none">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="">
                        <button type="submit" class="btn btn-success text-white fw-bold">
                            Iniciar sesión
                        </button>

                        @if (Route::has('password.request'))
                            <a class="d-none text-white" style="text-decoration: none; color:white; text-align:center; padding:15px" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
        <span style="--i:16;"></span>
        <span style="--i:17;"></span>
        <span style="--i:18;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:21;"></span>
        <span style="--i:22;"></span>
        <span style="--i:23;"></span>
        <span style="--i:24;"></span>
        <span style="--i:25;"></span>
        <span style="--i:26;"></span>
        <span style="--i:27;"></span>
        <span style="--i:28;"></span>
        <span style="--i:29;"></span>
        <span style="--i:30;"></span>
        <span style="--i:31;"></span>
        <span style="--i:32;"></span>
        <span style="--i:33;"></span>
        <span style="--i:34;"></span>
        <span style="--i:35;"></span>
        <span style="--i:36;"></span>
        <span style="--i:37;"></span>
        <span style="--i:38;"></span>
        <span style="--i:39;"></span>
        <span style="--i:40;"></span>
        <span style="--i:41;"></span>
        <span style="--i:42;"></span>
        <span style="--i:43;"></span>
        <span style="--i:44;"></span>
        <span style="--i:45;"></span>
        <span style="--i:46;"></span>
        <span style="--i:47;"></span>
        <span style="--i:48;"></span>
        <span style="--i:49;"></span>
    </div>
@endsection
{{-- </template> --}}

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #1f293a !important;
    }

    .container-login {
        position: relative;
        width: 256px;
        height: 256px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-login span {
        position: absolute;
        left: 0;
        width: 32px;
        height: 6px;
        background: #2c4766;
        border-radius: 8px;
        transform-origin: 128px;
        transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
        animation: animateBlink 3s linear infinite;
        animation-delay: calc(var(--i) * (3s / 50));
    }

    @keyframes animateBlink {
        0% {
            background: #0ef;
        }

        25% {
            background: #2c4766;
        }
    }

    .login-box {
        position: absolute;
        width: 400px;
        /* background: red; */
    }

    .login-box form {
        /* width: 100%; */
        padding: 0 50px;
    }

    h2 {
        font-size: 3em !important;
        color: #0ef !important;
        text-align: center;
        font-weight: bold !important;
    }

    .input-box {
        position: relative;
        margin: 25px 0;
    }

    .input-box input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: 2px solid #2c4766;
        outline: none;
        border-radius: 40px;
        font-size: 1em;
        color: #fff;
        padding: 0 20px;
        transition: .5s ease;
    }

    .input-box input:focus,
    .input-box input:valid {
        border-color: #0ef;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
        font-size: 1em;
        color: #fff;
        pointer-events: none;
        transition: .5s ease;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: 1px;
        font-size: .8em;
        background: #1f293a;
        padding: 0 6px;
        color: #0ef;
    }

    .forgot-pass {
        margin: -15px 0 10px;
        text-align: center;
    }

    .forgot-pass a {
        font-size: .85em;
        color: #fff;
        text-decoration: none;
    }

    .forgot-pass a:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        height: 45px;
        background: #0ef;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 1em;
        color: #1f293a;
        font-weight: 600;
    }

    .signup-link {
        margin: 20px 0 10px;
        text-align: center;
    }

    .signup-link a {
        font-size: 1em;
        color: #0ef;
        text-decoration: none;
        font-weight: 600;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
</style>
