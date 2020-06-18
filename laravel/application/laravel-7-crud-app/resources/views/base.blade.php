<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avenum Cloud PBX Configuration</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Avenum Cloud PBX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <a style="margin: 19px;" href="{{ route('endpoints.index')}}" class="btn btn-primary">Show All Extensions</a>
      <form class="form-inline my-2 my-lg-0" method="get" action="/contexts">
      @csrf 
      <input class="form-control mr-sm-2" name="context" type="search" placeholder="Search by Company" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <a style="margin: 19px;" href="{{ route('endpoints.create')}}" class="btn btn-primary">New contact</a>

<!Nav items below just in case>
<ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=""></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Disabled</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>

  </div>
</nav>
</div>

<div style="margin-top:100px"></div>

  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>