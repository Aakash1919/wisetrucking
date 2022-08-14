@extends('layouts.front')

@section('content')

    <div class="login-modal-container">
        <div class="f1-part2 login-modal">
            <h4 style="text-align: center !important" class="text-center">
                Login
            </h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p>
                    <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
                <p>
                    <input id="password" type="password"
                        class="form-control input-lg @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
                <div class="form-check login-remember">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label " for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <p class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg button-link7">
                        {{ __('Login') }}
                    </button>


                </p>
                @if (Route::has('password.request'))
                    <p class="text-center">
                        <a class="btn btn-link a-link7" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </p>
                @endif
            </form>
        </div>
    </div>
@endsection
