<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/842bd56ec1.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  <title><?php echo SITENAME; ?></title>
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-sticky-top navbar-expand-lg navbar-light" style="background-color: #ef8830">
      <a href="#" class="navbar-brand">
        <img src="https://localhost/ticket-to-fitness/public/images/t2f-logo.png" alt="logo" width="50" height="50">
        Ticket To Fitness
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="toggleMobileMenu">
        <ul class="navbar-nav ms-auto text-center nav-fill w-100">
          <li>
            <a class="nav-link" href="#"><b>Home</b></a>
          </li>
          <li>
            <a class="nav-link" href="#"><b>Timetable</b></a>
          </li>
          <li>
            <a class="nav-link" href="#"><b>Gyms</b></a>
          </li>
          <li>
            <a class="nav-link" href="#"><b>Settings</b></a>
          </li>
        </ul>
      </div>


    </nav>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>

</html>

<style>
  .container {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
  }
  .navbar-brand {
    padding-left: 15px;
  }
  .navbar-toggler {
  padding-right: 15px;
  border-color: #ef8830;
  border-width: 0px;
}



</style>