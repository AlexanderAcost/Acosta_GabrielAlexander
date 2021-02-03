<nav class="navbar navbar-expand-lg  fixed-top navbar-dark bg-secondary">   
  <div class="container-fluid">
    <a class="navbar-brand active" href="{{url('/')}}">
        <img src='{{url("/imagenes/logo1.png")}}' alt="" width="70" height="70" >
        LIBRERIA NACIONAL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
        <li class="nav-item">
            
            <a class="btn btn-outline-light menus fw-bold fs-4" aria-current="page" href="{{url('/')}}">INICIO</a>
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-light  fw-bold fs-4" href="{{url('libro/lista')}}">LIBROS</a>
            <!-- <a class="nav-link" href="#">Link</a> -->
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-light  fw-bold fs-4" href="{{url('editorial/lista')}}">EDITORIAL</a>
            <!-- <a class="nav-link" href="#">Link</a> -->
        </li>
        <!-- <li class="nav-item dropdown">
            <button type="button" class="dropdown-toggle btn btn-outline-light fw-bold fs-4" href="#" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false" >Drop</button>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item fw-bold" href="#">Action</a></li>
            <li><a class="dropdown-item fw-bold" href="#">Another action</a></li>
            <li><hr class="dropdown-divider fw-bold"></li>
            <li><a class="dropdown-item fw-bold" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          
          <a class="btn btn-outline-light fw-bold fs-4 disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>  -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button type="submit" class="btn btn-dark fs-4">Buscar</button>
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>

