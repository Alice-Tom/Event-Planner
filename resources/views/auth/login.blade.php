@extends('pages.forms')

@section('content')

    <div id="app">
        <div class="wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="{{ asset('images/registration-form-4.jpg')}}" alt="">
                </div>
                <form method="POST">
                    @csrf
                    <h3>Login</h3>
                    {{-- password --}}
                    <div class="form-holder">
                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @if(Session::has('login_error'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red">{{ Session::get('login_error') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
