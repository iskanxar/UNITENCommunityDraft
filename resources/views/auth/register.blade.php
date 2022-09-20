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

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ic_number" class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                            <div class="col-md-6">
                                <input id="ic_number" type="text" class="form-control @error('ic_number') is-invalid @enderror" name="ic_number" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus>

                                @error('ic_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="program" class="col-md-4 col-form-label text-md-end">{{ __('Program') }}</label>

                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control @error('program') is-invalid @enderror" name="program" value="{{ old('program') }}" required autocomplete="program" autofocus>

                                @error('program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="intake_semester" class="col-md-4 col-form-label text-md-end">{{ __('Intake Semester') }}</label>
                                <div class="col-md-6">
                                <select name="intake_semester" class="form-select" aria-label="Default select example"">
                                    <option value="Trimester 1, Academic Year 2018/2019">Trimester 1, Academic Year 2018/2019</option>
                                    <option value="Trimester 2, Academic Year 2018/2019">Trimester 2, Academic Year 2018/2019</option>
                                    <option value="Trimester 3, Academic Year 2018/2019">Trimester 3, Academic Year 2018/2019</option>
                                    <option value="Trimester 1, Academic Year 2019/2020">Trimester 1, Academic Year 2019/2020</option>
                                    <option value="Trimester 2, Academic Year 2019/2020">Trimester 2, Academic Year 2019/2020</option>
                                    <option value="Trimester 3, Academic Year 2019/2020">Trimester 3, Academic Year 2019/2020</option>
                                    <option value="Trimester 1, Academic Year 2020/2021">Trimester 1, Academic Year 2020/2021</option>
                                    <option value="Trimester 2, Academic Year 2020/2021">Trimester 2, Academic Year 2020/2021</option>
                                    <option value="Trimester 3, Academic Year 2020/2021">Trimester 3, Academic Year 2020/2021</option>
                                </select>
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
