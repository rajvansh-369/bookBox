<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Book-Box</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('book')}}"> Create Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('box')}}">Create Box</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('showBox')}}">Show Box</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('report')}}">Report</a>
        </li>
      </ul>

    </div>
  </nav>