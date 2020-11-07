 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

  <a class="navbar-brand text-white" href="/">Password Reset</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mydesoft" aria-controls="mydesoft" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="mydesoft">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link text-white" href="/">About</a>
      </li>

       <li class="nav-item">
        <a class="nav-link text-white" href="/">Services</a>
      </li> 

       <li class="nav-item">
        <a class="nav-link text-white" href="/">Contact</a>
      </li>
    </ul> 

    @if(!Auth::user())
      <div class="nav-item">
        <a href="{{route('register')}}" class="nav-link"><button class="btn btn-info btn-sm">Register</button></a>
      </div>

        <div class="nav-item">
        <a href="{{route('login')}}" class="nav-link"><button class="btn btn-info btn-sm">Login</button></a>
      </div>
     
     
     @else
      <div class=" nav-item dropdown">
      <span class = "text-white" id="dropdownnotify" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} </span>

       <div class="dropdown-menu" aria-labelledby="dropdownnotify">
        <li>
          <a href="/logout" class="dropdown-item">logout</a>
          
        </li>
       </div>
     </div>
     @endif 


  
    
  </div>
</nav>