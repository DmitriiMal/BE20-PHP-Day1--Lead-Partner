<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/553d5d3b41.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="car_rental_agency.css">
  <title>Car rental agency</title>
</head>
<body>
      <!-- --------------------------------- -->
      <!-- ------------- Navbar ------------ -->
      <!-- --------------------------------- -->
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top opacity-75">
        <div class="container-fluid px-5">
          <a class="navbar-brand d-flex align-items-center" href="#">
          <i class="fa-solid fa-car fs-3 me-3"></i>
            <span>QuickWheels</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- --------------------------------- -->
      <!-- -------------- PHP -------------- -->
      <!-- --------------------------------- -->

<?php
$cars = [
  ['Toyota', 'Camry', 'Red', 'Leopoldstadt', 'price', 'availability', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60'],
  ['Honda', 'Civic', 'Blue', 'Margareten', 'price', 'Avalable', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60'],
  ['Ford', 'Focus', 'Silver', 'Meidling', 'price', 'Avalable', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60'],
  ['Chevrolet', 'Malibu', 'Black', 'Hietzing', 'price', 'Not valable', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60'],
  ['Kia', 'Optima', 'Gray', 'Hietzing', 'price', 'Not valable', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60'],
  ['Nissan', 'Altima', 'White', 'Ottakring', 'price', 'Avalable', 'https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNhcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60']
  ]
?>


      <!-- --------------------------------- -->
      <!-- ------------- Header ------------ -->
      <!-- --------------------------------- -->

      <header class="hero">
        <h1 class="main-heading">Quick Wheels</h1>
      </header>

        <!-- ------------------------------- -->
        <!-- -------- Grid contauner ------- -->
        <!-- ------------------------------- -->

        <div class="container h-100 ">
        <div
          id="result"
          class=" grid-container row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
          <!-- card starts -->
          <?php 
          foreach($cars as $car) {
          echo "

           <div>
             <div class='card shadow-lg my-card my-4'>
              <div class='card-body'>
               <img src='$car[6]' alt=''>
                <h1 class='card-title text-center m-3'>$car[0]</h1>
                <p class='card-text text-center'>$car[1]</p>
                <div class='border-top border-bottom pt-3'>
                  <ul>
                    <li>
                      <p>$car[2]</p>
                    </li>
                    <li>
                      <p>$car[3]</p>
                    </li>
                    <li>
                      <p>$car[5]</p>
                    </li>
                  </ul>
                  <p class='fw-semibold'>&euro; $car[4]</p>
             
                </div>
              </div>
              <div class='card-body pt-0'>
                <button href='#' class='btn btn-success px-5'>Book</button>
              </div>
              </div>
           </div>

         ";}?>
          <!-- card ends -->
        </div>
      </div>

      <!-- --------------------------------- -->
      <!-- ------------- Footer ------------ -->
      <!-- --------------------------------- -->

      <footer class="bg-dark py-2 mt-2">
        <div class="container text-light text-center">

          <form
            class="d-flex justify-content-center align-items-md-center flex-lg-row flex-md-row flex-sm-column flex-column mb-5">
            <label class="form-label me-3 my-2" for="email"
              >Sign up for our newsletter</label
            >
            <input class="rounded-2 py-1 me-3 my-2" type="email" id="email" />
            <input
              class="btn btn-dark py-1 px-2 border-white me-3 my-2"
              type="submit"
              name=""
              id="" />
          </form>
          <small class="text-white-50"
            >&copy; 2023 Copyright: Dmitrii Malyshkin</small
          >
        </div>
      </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



