<?php
require('config/db.php');
require('config/config.php');
include('include/jquery.php');

if (isset($_GET['submit'])) {
  if ($_GET['submit'] == 'signup') {
    if (!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['password']) && !empty($_GET['contact']) && !empty($_GET['address'])) {
      $name = mysqli_real_escape_string($link, $_GET['name']);
      $email = mysqli_real_escape_string($link, $_GET['email']);
      $password = mysqli_real_escape_string($link, $_GET['password']);
      $contact = mysqli_real_escape_string($link, $_GET['contact']);
      $address = mysqli_real_escape_string($link, $_GET['address']);

      $user_check_query = "SELECT * FROM Customer WHERE email = '$email'";
      $result = mysqli_query($link, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      if ($user['email'] == $email) {
        echo "<script type='text/javascript'>
        function onLoadAlert() {
            alert('Already Registered! Sign In');
        }
        $(document).ready(onLoadAlert);
        </script>";
      } else {
        $query = "INSERT INTO Customer VALUES('$name', '$email', '$password', '$contact', '$address')";
        if (mysqli_query($link, $query)) {
          session_start();
          $_SESSION['user'] = $name;
          $_SESSION['user_email'] = $email;
          header('Location: index.php');
        } else {
          echo "Error:" . mysqli_error($link);
        }
      }
    } else {
      echo "<script type='text/javascript'>
      function onLoadAlert() {
          alert('Fill in all fields');
      }
      $(document).ready(onLoadAlert);
      </script>";
    }
  }
  if ($_GET['submit'] == 'signin') {
    if (!empty($_GET['email']) && !empty($_GET['password'])) {
      $email = mysqli_real_escape_string($link, $_GET['email']);
      $password = mysqli_real_escape_string($link, $_GET['password']);

      $query = "SELECT * FROM Customer WHERE email='$email' AND pass='$password'";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_assoc($result);
      print_r($row);
      echo $row['email'];
      if ($result) {
        if ($row['email'] == $email && $row['pass'] == $password) {
          session_start();
          $_SESSION['user'] = $row['name'];
          $_SESSION['user_email'] = $email;
          header('Location: index.php');
        } else {
          echo "<script type='text/javascript'>
          function onLoadAlert() {
              alert('Invalid Email or Password');
          }
          $(document).ready(onLoadAlert);
          </script>";
        }
      }
    }
  }
}

?>

<body>
  <section id="pagenavbar">
    <section id="pagenavbar">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand logo" href="index.php">
          <img src="images/logo.png" width="220" height="150" alt="" />
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-padding" id="collapse_target">
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#menu">Pizzas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign.html">Sign Up/In</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>

    <section id="body">
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <h1>Create Account!</h1>
            <!-- <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"
                ><i class="fab fa-google-plus-g"></i
              ></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
            <span>Use your email</span>
            <input type="text" placeholder="Name" name="name" />
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <input type="text" placeholder="Contact No" name="contact" />
            <input type="text" placeholder="Address" name="address" />
            <button type="submit" name="submit" value="signup">Sign Up</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form method="GET">
            <h1>Sign in</h1>
            <!-- <div class=" social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div> -->
            <span>Use your account</span>
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="submit" value="signin">Sign In</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1 class="overlay-white">Existing User?</h1>
              <p>To order pizza Sign in with your info</p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1 class="overlay-white">New User?</h1>
              <p>Enter your personal details and start journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 
    <footer>
        <div class="container-fluid mt-5 pt-2 pb-2 text-center">
          <div class="row">
              <div class="col">
                <a href="#"><img src="images/icons/fb.svg" alt=""/></a>
                <a href="#"><img src="images/icons/insta.svg" alt=""/></a>
                <a href="#"><img src="images/icons/twitter.svg" alt=""/></a>
              </div>
            </div>
          <p class="ftr-copy pt-2">&copy; PizzaHut Inc. Pakistan All Rights Reserved</p>
  
          </footer> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./scripts/sign.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>