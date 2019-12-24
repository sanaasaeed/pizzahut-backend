<?php require('config/db.php') ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Checkout - PizzaHut</title>
  <!-- <link rel="stylesheet" href="css/styles.css" /> -->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <link rel="stylesheet" href="css/cart.css" />
  <link rel="stylesheet" href="css/mobile-checkout.css" media="(max-width:980px)" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet" />
</head>

<body>
  <section id="pagenavbar">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand logo" href="#">
        <img src="images/logo.png" width="220" height="150" alt="" />
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-padding" id="collapse_target">
        <?php include('include/navbar.php') ?>
      </div>
    </nav>
  </section>

  <section id="checkout-header">
    <div class="container">
      <h2 class="checkout-heading">PERSONAL INFO</h2>
    </div>
  </section>

  <section id="checkout-header">
    <div class="container">
      <h2 class="checkout-heading">CART</h2>
    </div>
  </section>

  <?
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Pizza WHERE pizza_id = '$id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    echo " <p>$id</p>
  <section id='checkout'>
    <div class='container'>
      <div class='grey-shade'>
        <div class='table-heading'>
          <h3 class='checkout-nameheadings'>Name</h3>
          <h3 class='checkout-nameheadings'>Qty</h3>
          <h3 class='checkout-nameheadings'>Price</h3>
        </div>
        <div class='order-items price-list Qty-list checkout-row'>
          <p>" . $row['pizza_name'] . "</p>
          <select name='qty' id='Qty' required>
            <option selected value='1'>1 </option>
            <option value='2'>2 </option>
            <option value='3'>3 </option>
            <option value='4'>4 </option>
            <option value='5'>5 </option>
            <option value='6'>6 </option>
            <option value='7'>7 </option>
            <option value='8'>8 </option>
            <option value='9'>9 </option>
            <option value='10'>10 </option>
          </select>
          <p id ='price'></p>
        </div>
      </div>
    </div>
  </section>
  ";
    echo "<section id='total'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-9'></div>

      <div class='col-lg-3'>
        <div class='red-box mb-3'>
          Total: 1,499
        </div>
      </div>
    </div>
  </div>
</section>
<div class='div-submit'>
  <input href='checkout.php' type='submit' value='PROCEED TO CHECKOUT' name='submit' class='btn btn-warning btn-submit'>
</div>";
  } else {
    echo "<h1 class='checkout-nameheadings'>Nothing in cart</h1>";
  }


  ?>


  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="/scripts/smoothscroll.js"></script>
  <script src="/scripts/checkout.js"></script>
</body>

</html>