<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5 mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{ route('homepage') }}">Home</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('aboutpage') }}">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactpage') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('extrapage') }}">Extra</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('personPage') }}">Person</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>