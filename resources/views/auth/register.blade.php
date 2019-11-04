@extends('mainLayout.formLayout')

@section('section')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="register-form">
                <div class="form-content">
                  <!-- Name input -->
                  <div class="group">
                          <div class="label">
                            <label for="name">{{ __('Name') }}</label>
                          </div>
                          <div class="field">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Joel Slamk">
                          </div>
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                  <!-- E-mail input -->
                  <div class="group">
                          <div class="label">
                            <label for="email">{{ __('E-Mail') }}</label>
                          </div>
                          <div class="field">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                          </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                  </div>
                  <!-- Phone number input -->
                  <div class="group">
                          <div class="label">
                            <label for="phoneNo">{{ __('Phone Number') }}</label>
                          </div>
                          <div class="field">
                            <input id="phoneNo" type="text" class="form-control @error('phoneNo') is-invalid @enderror" name="phoneNo" value="{{ old('phoneNo') }}" required autocomplete="phoneNo" placeholder="+2557..">
                          </div>

                          @error('phoneNo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                  <!-- Password input -->
                  <div class="group">
                          <div class="label">
                            <label for="password">{{ __('Password') }}</label>
                          </div>
                          <div class="field">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          </div>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                  <!-- Confirm Password input -->
                  <div class="group">
                          <div class="label">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                          </div>
                          <div class="field">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>

                  </div>
                </div>

                <button type="submit" id="button" onclick="btnDance()" class="">{{ __('Register') }}</button>
                </div>
          </form>
@endsection
