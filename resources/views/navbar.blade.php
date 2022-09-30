<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 90px; margin-left: 50px">
    <h5 class="p-2">Axies App</h5>
    <ul class="navbar-nav">
      
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/' }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/axie' }}">Axies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/logs' }}">Logs</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 85%"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
    </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }
</style>
