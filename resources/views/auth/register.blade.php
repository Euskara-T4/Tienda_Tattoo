@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="izena" class="col-md-4 col-form-label text-md-right">{{ __('izena') }}</label>

                            <div class="col-md-6">
                                <input id="izena" type="text" class="form-control @error('izena') is-invalid @enderror" name="izena" value="{{ old('izena') }}" required autocomplete="izena" autofocus>

                                @error('izena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="abizena" class="col-md-4 col-form-label text-md-right">{{ __('abizena') }}</label>

                            <div class="col-md-6">
                                <input id="abizena" type="text" class="form-control @error('abizena') is-invalid @enderror" name="abizena" value="{{ old('abizena') }}" required autocomplete="abizena" autofocus>

                                @error('abizena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pasahitza" class="col-md-4 col-form-label text-md-right">{{ __('pasahitza') }}</label>

                            <div class="col-md-6">
                                <input id="pasahitza" type="password" class="form-control @error('pasahitza') is-invalid @enderror" name="pasahitza" required autocomplete="new-password">

                                @error('pasahitza')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
