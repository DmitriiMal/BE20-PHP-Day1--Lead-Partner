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
  [
      'make' => 'Toyota',
      'model' => 'Camry',
      'color' => 'Gray',
      'location' => 'Leopoldstadt',
      'price_per_day' => 50,
      'availability' => true,
      'img' => 'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
  ],
  [
      'make' => 'Honda',
      'model' => 'Civic',
      'color' => 'Red',
      'location' => 'Margareten',
      'price_per_day' => 45,
      'availability' => true,
      'img' => 'https://images.unsplash.com/photo-1570303278489-041bd897a873?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8SG9uZGElMjBDaXZpY3xlbnwwfHwwfHx8MA%3D%3D'
  ],
  [
      'make' => 'Ford',
      'model' => 'Focus',
      'color' => 'White',
      'location' => 'Meidling',
      'price_per_day' => 55,
      'availability' => true,
      'img' => 'https://images.unsplash.com/photo-1625179298498-9deecbfa38cb?q=80&w=2864&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
  ],
  [
      'make' => 'Chevrolet',
      'model' => 'Malibu',
      'color' => 'Cherry',
      'location' => 'Hietzing',
      'price_per_day' => 60,
      'availability' => false,
      'img' => 'https://images.unsplash.com/photo-1675933517822-d902a064a998?q=80&w=2863&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
  ],
  [
      'make' => 'Kia',
      'model' => 'Optima',
      'color' => 'Black',
      'location' => 'Hietzing',
      'price_per_day' => 55,
      'availability' => false,
      'img' => 'https://images.unsplash.com/photo-1592805723127-004b174a1798?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
  ],
  [
      'make' => 'Nissan',
      'model' => 'Altima',
      'color' => 'White',
      'location' => 'Ottakring',
      'price_per_day' => 50,
      'availability' => true,
      'img' => 'https://images.unsplash.com/photo-1531921391719-ca49c9b4c810?q=80&w=2848&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
  ]
];

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
          foreach($cars as $car): ?>

           <div>
             <div class="card shadow-lg my-card my-4">
               <img class="card-img-top" src="<?= $car['img'] ?>" alt="">
              <div class="card-body">
                <h3 class="card-title text-center m-3"><?= $car['make'] ?></h3>
                <h5 class="card-text text-center"><?= $car['model'] ?></h5>
                <div class="border-top border-bottom pt-3">
                  <ul>
                    <li>
                    <?= $car['color'] ?>
                    </li>
                    <li>
                    <?= $car['location'] ?>
                    </li>
                    <li>
                    <?= $car['availability'] ?>
                    </li>
                  </ul>
                  <p class="fw-semibold">&euro; <?= $car['price_per_day'] ?> /day</p>
             
                </div>
              </div>
              <div class="card-body pt-0">
                <button href="#" class="btn btn-success px-5">Book</button>
              </div>
              </div>
           </div>

         
         <?php endforeach; ?>
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



