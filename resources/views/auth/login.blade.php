@extends('layouts.auth')

@section('content')

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="true"> Remember me
        </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div class="mt-4">
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>

        <p class="mt-5 mb-3 text-muted">by Angel Rojas © {{ date('d M Y') }}</p>
    </form>

@endsection
