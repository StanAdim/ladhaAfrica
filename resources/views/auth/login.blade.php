@extends('mainLayout.formLayout')

@section('section')
<div class="form-box">
  <form method="POST" action="{{ route('login') }}">
    @csrf
                <div class="form-content-login">
                  <div class="group">
                          <div class="label">
                            <label for="email">{{ __('E-Mail') }}</label>
                          </div>
                          <div class="field">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          </div>
                          <br />
                          @error('email')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                  @enderror
                  </div>
                  <div class="group">
                          <div class="label">
                            <label for="password">Password</label>
                          </div>
                          <div class="field">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                  </div>



                <button type="submit" id="button" onclick="btnDance()" class="">{{ __('Login') }}</button>

  </div>
                <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->
          </form>
</div>
@endsection
