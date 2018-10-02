<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Hulpverlening Zonerand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL('/') }}">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL('/users') }}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL('/pbms') }}">PBMs</a>
      </li>
      
    </ul>
    
  </div>
  <span class="float-md-right">
        
          Logged in User
      
  </span>
</nav>