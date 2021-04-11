
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>
  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Test</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="p-2 text-dark" href="{{ route('users') }}">Users</a>
        </nav>
        <a class="btn btn-outline-primary" href="{{ route('logout') }}">Logout</a>
    </div>

    @yield('content')



  </body>
</html>
