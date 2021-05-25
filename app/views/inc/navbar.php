<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">

    <a class="navbar-brand d-flex px-0" href="#">
      <img src="<?php echo URLROOT; ?>/images/t2f-logo.png" alt="logo" width="50" height="50" class="navbar-image">
      <h4 class="fitch-title">Fitch</h4>
    </a>

    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbar4">
      <ul class="navbar-nav mr-auto pl-lg-4">
        <li class="nav-item px-lg-2 active"> <a class="nav-link" href="<?php echo URLROOT ?>"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>
        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li>
        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>About</a> </li>

        <li class="nav-item px-lg-2 dropdown d-menu">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Dropdown
            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>

          </a>
          <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>
      </ul>

    </div>
  </div>
</nav>

<style>
  .navbar {
    background-color: #3F3F3F;
}

.dropdown-toggle::after {
    display: none;
}

.fitch-title {
    font-weight: bolder;
    color: #F2F2F2;
    margin: auto;
    letter-spacing: 3px;
    padding-left: 20px;
}

.text-decoration-none {
    text-decoration: none !important;
}

.navbar-toggler {
    padding-right: 15px;
    border-color: #3F3F3F;
    border-width: 0px;
}

</style>