<?php include 'head.php';?>


<header>

    <nav class="navbar navbar-expand">
          <a class="navbar-brand" href="#">
    <img class="logo" src="img/logo_campus.png" alt="Logo">
  </a>
     <ul class="navbar-nav ml-auto d-none d-lg-block">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kaart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projecten</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

                    <li class="nav-item">
              <button class="btn-search" type="button" onclick="myFunction()">
        <i class="fa fa-search"></i>
      </button>
      </li>
    </ul>
           <ul class="navbar-nav ml-auto d-lg-none">

                   <li class="nav-item">
                         <button class="btn-search" type="button" onclick="myFunction()">
        <i class="fa fa-search"></i>
      </button>


      </li>
          </ul>


       </nav>


              <div class="search" id="search">

 <div class="input-group">
    <input type="text" class="form-control" placeholder="Search this blog">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</div>

    </header>
