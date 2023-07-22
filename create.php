<?php
require_once "db_connect.php";
require_once "file_upload.php";

if (isset($_POST["create"])) {
    $isbn = $_POST["isbn"];
    $title = $_POST["title"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $image = fileUpload($_FILES["image"]);
    $sql = "INSERT INTO book (isbn, title, author_first_name, author_last_name, image, short_description, type, publisher_name, publisher_address, publish_date) VALUES ('$isbn', '$title', '$author_first_name', '$author_last_name', '{$image[0]}', '$short_description', '$type', '$publisher_name', '$publisher_address', '$publish_date')";
    if (mysqli_query($connect, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
        New record has been created, {$image[1]}
      </div>";
      header("refresh: 3; url= index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        Error found, {$image[1]}
      </div>";
    }
}
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Big Library</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            body{
                background-color: black;
            }
        </style>
    </head>
    <body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
  <a href="index.php"><button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button></a>
  </li>
  <li class="nav-item" role="presentation">
  <a href="profile.php"><button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button></a>
  <li class="nav-item" role="presentation">

    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>

    </nav>
<body>
    <div class="container mt-5">
    <h2 style="color: white; text-align:center;">Set a new book</h2>
    <form method="POST" enctype="multipart/form-data" style="color: white;">
        <div class="row">
            <div class="col-md-6">
                <!-- Left Column -->
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" aria-describedby="isbn" name="isbn">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="file" class="form-control" id="image" aria-describedby="image" name="image">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Author name</label>
                    <input type="text" class="form-control" id="author_first_name" aria-describedby="author_first_name" name="author_first_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Author lastname</label>
                    <input type="text" class="form-control" id="author_last_name" aria-describedby="author_last_name" name="author_last_name">
                </div>
            </div>

            <div class="col-md-6">
                <!-- Right Column -->
                <div class="mb-3 mt-3">
                <label for="name" class="form-label">Type</label>
                    <select class="form-select" aria-label="Default select example" type="text" class="form-control" id="type" name="type">
                        <option selected>Type</option>
                        <option value="Book">Book</option>
                        <option value="CD">CD</option>
                        <option value="DVD">DVD</option>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Short description</label>
                    <input type="text" class="form-control" id="place" aria-describedby="short_description" name="short_description">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Publisher name</label>
                    <input type="text" class="form-control" id="publisher_name" aria-describedby="publisher_name" name="publisher_name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Publisher address</label>
                    <input type="text" class="form-control" id="publisher_address" aria-describedby="publisher_address" name="publisher_address">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="publish_date" aria-describedby="date" name="publish_date">
                </div>
            </div>
        </div>

        <!-- Submit and Back buttons -->
        <div class="row mt-3">
            <div class="col-md-6">
                <button name="create" type="submit" class="btn btn-success">Set a new book</button>
            </div>
            <div class="col-md-6">
                <a href="index.php" class="btn btn-warning float-end">Back to home page</a>
            </div>
        </div>
    </form>
</div><br>
<!-- Footer -->
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
        ><i class="fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa-github"></i
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
<!-- Footer --> 
    </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

</body>
</html>