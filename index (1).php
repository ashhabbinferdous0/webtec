<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASHHAB HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fd-3 h-font" href="index.php">ASHHAB HOTEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 " href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
        
      </ul>
      <div class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModel">
    Login
</button>
</div>
    </div>
  </div>
</nav>



<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>
   <div class="modal-header">
   <i class="bi bi-person-check"fs-3 me-2></i> User Rejistation
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wraplh-base">Note : your details must match your ID(passport ,visa,etc)<br>
        that will be required during check- in.</span>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
            <label class="form-label">Name</label>
    <input type="email" class="form-control shadow none" >

        ...<div class="mb-3">
    <label class="form-label">Email </label>
    <input type="email" class="form-control shadow none" >
    
  </div>
  <div class="container-fluid">
           <div class="col-md-6">
            <label class="form-label">Phone Number</label>
    <input type="email" class="form-control shadow none" >

        ...<div class="mb-3 ps-0 mb-3">
    <label class="form-label">Picture </label>
    <input type="number" class="form-control shadow none" ><div> class="row">
      <div>
            
    ..<div class="mb-3">
    <label class="form-label">Address </label>
    <input type="text" class="form-control shadow none" >
    
  </div>
  <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Pincode</label>
    <input type="email" class="form-control shadow none" >

        ...<div class="mb-3">
    <label class="form-label">Date of birth </label>
    <input type="date" class="form-control shadow none" ><div> class="row">
      <div>
      <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Password</label>
    <input type="password" class="form-control shadow none" >

        ...<div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" class="form-control shadow none" ><div> class="row">
      <div>
            
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  
    
  

</div>
<div class = "d-flex align-item-center justify-content-between mb-2">
      <button  type="submit"class="btn btn-dark shadow-none">LOGIN</button>
      <button  type="submit"class="btn btn-dark shadow-none">Rejister</button>
      <a herf ="javascript:void(0)"class="text secondary text-decorate-none">Forgot Password? </a>
      </div>
</form>
    </div>
  </div>
</div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>