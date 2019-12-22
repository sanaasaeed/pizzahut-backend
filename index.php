<?php
require('config/config.php');
require('config/db.php');
if (isset($_GET['submit'])) {
  $name = mysqli_real_escape_string($link, $_GET['name']);
  $email = mysqli_real_escape_string($link, $_GET['email']);
  $message = mysqli_real_escape_string($link, $_GET['message']);

  $query = "INSERT INTO Contact(name,email,message) VALUES('$name', '$email', '$message')";
  if (mysqli_query($link, $query)) {
    header("Location: " . ROOT_URL . '');
  } else {
    echo "ERROR: " . mysqli_error($link);
  }
}
?>
<?php include('include/header.php')
?>
<section id="landing-slide">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"></div>
      <div class="col-lg-6">
        <div class="align">
          <h2 class="text mobile-heading">MAKE YOUR “OWN” CUSTOM PIZZA!!</h2>
          <button type="button " class="btn btn-warning orderbtn">
            Order Now !
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="menu-header">
  <div class="container">
    <h2 class="menu-heading">DELIVERING THE PERFECT PIZZA FOR YOU</h2>
  </div>
</section>

<section id="menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6  time">
              <div class="row">
                <div class="col-lg-4  time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6  time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6 time">
              <div class="row">
                <div class="col-lg-4 time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6 time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6 time">
              <div class="row">
                <div class="col-lg-4 time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6 time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row lower-row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6 time">
              <div class="row">
                <div class="col-lg-4 time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6 time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6 time">
              <div class="row">
                <div class="col-lg-4 time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6 time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="grey-shade">
          <div class="pizza-pic">
            <img src="images/pizza.png" alt="pizza picture" height="180px" width="180px" />
          </div>

          <div class="pizza-name">
            <h4 class="pizza-heading">Chicken Tikka</h4>
          </div>

          <div class="pizza-description">
            <p>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, w
            </p>
          </div>

          <div class="row lower-pad">
            <div class="col-lg-6 time">
              <div class="row">
                <div class="col-lg-4 time-padding1">
                  <img src="images/clock.svg" alt="clock pic" height="30px" width="30px" />
                </div>
                <div class="col-lg-6 time-padding2">
                  <p class="time-text">20-30 Mins</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5 buy-btn">
              <a href="checkout.html" class="btn buynow-btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="deal-header">
  <div class="container">
    <h2 class="deal-heading">DEALS FOR YOU</h2>
  </div>
</section>

<section class="container mt-4 pb-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="#">
          <img class="d-block w-100" src="images/deal1.jpeg" alt="Deal 1" />
        </a>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="images/deal2.jpeg" alt="Deal 2" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/deal3.jpeg" alt="Deal 3" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<div class="container">
  <h2 class="menu-heading mb-5">CONTACT US</h2>
</div>
<section id="contact" class="container form-container grey-shade p-4">
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder="Your Name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="50" rows="10" placeholder="Your Message Here"></textarea>
    </div>
    <div class="div-submit">
      <input type="submit" value="SUBMIT" name="submit" class="btn btn-warning btn-submit">
    </div>
  </form>
</section>
<?php include('include/footer.php') ?>