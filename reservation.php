<?php
    require_once "db_connect.php";
    $id = $_GET["x"];

    $sql = "SELECT * FROM reservation WHERE id = $id";
    $result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<body>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hootel Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
  <a href="index.php"><button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button></a>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>
    </nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Card-->
<div class="card shadow mb-5 bg-white rounded">

	<!--Card-Body-->
	<div class="card-body">

		<!--Card-Title-->
		<p class="card-title text-center shadow mb-5 rounded">Travel Booking Form</p>
 
 <div class="icons text-center">

<i class="fa fa-plane fa-2x" aria-hidden="true"></i>
<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
<i class="fa fa-train fa-2x" aria-hidden="true"></i>


 </div>

    <hr>

		<p class="searchText"><strong>Search For Cheap Flights</strong></p>

		<!--First Row-->
		<div class="row mb-3 mt-3">

			<label class="radiobtn"><input type="radio" name="gender" value="male">One Way</label>
			<label class="radiobtn"><input type="radio" name="gender" value="male">Round Trip</label>

		</div>


		<!--Second Row-->
		<div class="row">

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">From City/Airport</option>
        <option value="1">New Delhi</option>
        <option value="2">Mumbai</option>
        <option value="3">Bangalore</option>
    </select>
			</div>

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">To City/Airport</option>
       <option value="1">New Delhi</option>
        <option value="2">Mumbai</option>
        <option value="3">Bangalore</option>
    </select>
			</div>

		</div>


		<!--Third Row-->
		<div class="row">

			<div class="col-sm-6">
				<input placeholder="&#xf073; Departing" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" >
			</div>

				<div class="col-sm-6">
					<input placeholder="&#xf073; Arriving" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome" >
			</div>

				</div>


				<!--Fourth Row-->
				<div class="row mt-4">

					<div class="col-sm-6">
						<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Anytime</option>
        <option value="1">6:00 AM</option>
        <option value="2">3:00 PM</option>
        <option value="3">6:00 PM</option>
    </select>
					</div>

					<div class="col-sm-6">
						<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Anytime</option>
          <option value="1">6:00 AM</option>
        <option value="2">3:00 PM</option>
        <option value="3">6:00 PM</option>
    </select>
					</div>

				</div>




				<!--Fifth Row-->
				<div class="row">

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Kids(0-14)</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Adults(15-64)</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Seniors(65+)</option>
   <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>



				</div>

				<a href="#" class="btn btn-primary float-right mt-5">Find Flights</a>
			</div>
		</div>


<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>