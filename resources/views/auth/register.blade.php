@extends('layouts.auth')

@section('content')

    <form action="{{ route('register.submit') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">Please register</h1>

        <label class="sr-only">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Your name" required autofocus>

        <label class="sr-only">Lastname</label>
        <input type="text" name="lastname" class="form-control" placeholder="Your lastname" required>

        <label class="sr-only">Phone</label>
        <input type="tel" name="phone" class="form-control" placeholder="Your phone" required>

        <label class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Your email" required>

        <label class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Your password" required>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

        <div class="mt-4">
            <a href="{{ route('login') }}">Do you have an account? Login</a>
        </div>

        <p class="mt-5 mb-3 text-muted">by Angel Rojas © {{ date('d M Y') }}</p>
    </form>

@endsection
