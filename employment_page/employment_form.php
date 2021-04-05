<?php

include "config.php";

$fullname = $email = $selection = $company_name = $contact_phone = " ";

function fullnameCheck($fullname) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fullname"])) {
    $fullname = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    return $fullname ;
  } else {

    }
  }
}

function emailCheck($email) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $email ;
    } else {
      
    }
  }
}

function selectionCheck($selection){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($selection == '0'){
      return "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
    }
    else {

    }
  }
}

function company_nameCheck($company_name) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["company_name"])) {
      $company_name = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
      return $company_name ;
    } else {
      
      }
    }
  }

  function telephoneCheck($contact_phone) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["contact_phone"])) {
        $contact_phone = "<span class='text-danger fw-bold' style='font-size:14px'>Пополнете тука!</span>";
        return $contact_phone ;
      } else {
    
        }
      }
    }


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$selection = $_POST['selection']; 
$company_name = $_POST ['company_name'];
$contact_phone = $_POST ['contact_phone'];
$insertData = "INSERT INTO form (fullname, email, selection, companyname, contactphone)
VALUES ('$fullname', '$email', '$selection', '$company_name', '$contact_phone')";

  if ($conn->query($insertData) === TRUE){
    header("Location:redirect_page.html");
  }
  else {
  }
}

    if ($conn->connect_error) {
      echo "ERROR connecting to server...";
    } else {
      
    }
?>

<!DOCTYPE html>
<html lang="mk">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      href="https://obuki.brainster.co/wp-content/uploads/2020/07/brainster-logo2-1.png"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="employment.css" />

    <title>Brainster Employment</title>
  </head>
  <body>
<!-- Nav Section -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fw-bold">
    <div class="container-fluid">
    <a href="../index.html">
        <img
        src="../assets/Logo-white.png"
        class="navbar-brand"
        alt="Brainster Logo"
        />
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span
        ><i id="navbar-toggle-icon" class="fas fa-caret-down fa-2x"></i
        ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-lg-0">
        <li class="nav-item me-5 nav-underline">
            <a
            class="nav-link"
            aria-current="page"
            href="https://marketpreneurs.brainster.co"
            >Академија за маркетинг</a
            >
        </li>
        <li class="nav-item me-5 nav-underline">
            <a
            class="nav-link"
            aria-current="page"
            href="https://codepreneurs.brainster.co"
            >Академија за програмирање</a
            >
        </li>
        <li class="nav-item me-5 nav-underline">
            <a
            class="nav-link"
            aria-current="page"
            href="https://datascience.brainster.co/"
            >Академија за data science</a
            >
        </li>
        <li class="nav-item me-5 nav-underline">
            <a
            class="nav-link"
            aria-current="page"
            href="https://design.brainster.co"
            >Академија за дизајн</a
            >
        </li>
        <li class="nav-item nav_button">
            <a
            class="btn btn-danger hover_effect"
            aria-current="page"
            href="employment_form.php"
            >
            <span class="employ-icon"
                ><i class="fas fa-users employ-icon"></i
            ></span>
            <span class="employ-text">Вработи наш студент</span>
            </a>
        </li>
        </ul>
    </div>
    </div>
</nav>
<!-- End of Nav Section -->
<!-- Form Section -->
<div class="container-fluid bg-warning formSection">
    <div class="row">
    <div class="col-md-12 employ-title">Вработи студенти</div>
    </div>
    <div class="container">
    <form method="POST" >
        <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
            <label for="fullname" class="form-label"
            ><b>Име и презиме</b></label
            >
            <?php echo fullnameCheck($fullname); ?>
            <input
                type="text"
                
                class="form-control p-3"
                id="fullname"
                placeholder="Вашето име и презиме"
                name="fullname"
            />
            </div>
            <div class="mb-3">
            <label for="email" class="form-label"
                ><b>Контакт имејл</b>
            </label>
            <?php echo emailCheck($email);?>
            <input
                type="text"
                class="form-control p-3"
                id="email"
                name="email"
                placeholder="Контакт имејл на вашата компанија"
                
            />
            </div>
            <div class="mb-3">
            <label for="selection" class="form-label"
                ><b>Тип на студенти</b>
            </label>
            <?php echo selectionCheck($selection)?>
            <div class="input-group mb-3">
                <select
                class="form-select p-3"
                id="selection"
                name="selection"
                >
                <option selected hidden value="0">Изберете тип на студент</option>
                <option value="1" name="selection">
                    Студенти од маркетинг
                </option>
                <option value="2" name="selection">
                    Студенти од програмирање
                </option>
                <option value="3" name="selection">
                    Студенти од data science
                </option>
                <option value="4" name="selection">
                    Студенти од дизајн
                </option>
                </select>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
            <label for="companyname" class="form-label"
                ><b>Име на компанија</b></label
            >
            <?php echo company_nameCheck($company_name)?>
            <input
                type="text"
                class="form-control p-3"
                id="companyname"
                placeholder="Име на вашата компанија"
                
                name="company_name"
            />
            </div>
            <div class="mb-4">
            <label for="contactphone" class="form-label"
                ><b>Контакт телефон</b></label
            >
            <?php echo telephoneCheck($contact_phone)?>
            <input
                type="tel"
                class="form-control p-3"
                id="contactphone"
                placeholder="Контакт телефон на вашата компанија"
                
                name="contact_phone"
            />
            </div>
            <div class="mb-3">
            <label for="submit" class="form-label"></label>
            <input
                type="submit"
                class="form-control p-3 btn btn-danger text-uppercase"
                value="испрати"
                id="submit"
                name="submit"
            />
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
<!-- End of Form Section -->
<!-- Footer Section -->
<footer>
      <div class="container-fluid text-center text-white bg-dark p-4">
        <div class="row">
          <div class="col-12">
            Изработено со &#10084; од студентите на Brainster
          </div>
        </div>
      </div>
</footer>
<!-- End of Footer Section -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/67902f0cbb.js"
      crossorigin="anonymous"
    ></script>
    <script>
      document
        .querySelector(".navbar-toggler")
        .addEventListener("click", toggleLogo);

      function toggleLogo() {
        var logoVisibility = document.querySelector(".navbar-brand").style
          .visibility;
        if (logoVisibility == "visible" || logoVisibility == "") {
          document.querySelector(".navbar-brand").style.visibility = "hidden";
        } else {
          document.querySelector(".navbar-brand").style.visibility = "visible";
        }

        document
          .querySelector("#navbar-toggle-icon")
          .classList.toggle("fa-caret-down");
        document
          .querySelector("#navbar-toggle-icon")
          .classList.toggle("fa-times");

        document.querySelector(".navbar").classList.toggle("nav-shown");
      }
    </script>
  </body>
</html>