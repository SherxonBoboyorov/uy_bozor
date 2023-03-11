@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h3 class="size_h1">Uy Bozor</h3>
                        <div class="row mb-3">
                            <label for="email"  class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6" >
                                <input id="email" type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"  class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
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
    </div>
</div>

<style>
    .col-md-8 {
        flex: 0 0 auto;
        width: 880px;
        height: 150px;
    }

    .card-header {
        margin-bottom: 100px
    }

    .card-body {
        margin-right: 100px
    }

    .card {
        margin-top: -200px;
        border-radius: 6px;
        background-color: rgba(244, 239, 239, 0.823);

    }

    .size_h1 {
        font-family: system-ui;
        text-align: center;
        margin-left: 110px;
        margin-top: -20px;
        color: rgba(4, 0, 0, 0.548)
    }

    </style>


@endsection
