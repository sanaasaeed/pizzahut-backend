<?php include('include/arrays.php');
echo "<ul class='navbar-nav navbar-right'>";
if (isset($_SESSION['user'])) {
  foreach ($navsign_items as $navitem) {
    echo "<li class='nav-item'>
      <a class='nav-link' href='" . $navitem['href'] . "'>" . $navitem['title'] . "</a>
    </li>";
  }
} else {
  foreach ($nav_items as $navitem) {
    echo "<li class='nav-item'>
      <a class='nav-link' href='" . $navitem['href'] . "'>" . $navitem['title'] . "</a>
    </li>";
  }
}

//   <li class="nav-item">
//     <a class="nav-link" href="#pagenavbar">Home <span class="sr-only">(current)</span></a>
//   </li>
  
//   <li class="nav-item">
//     <a class="nav-link" href="#contact">Contact Us</a>
//   </li>
//   <li class="nav-item">
//     <a class="nav-link" href="sign.php">Sign Up/In</a>
//   </li>
// </ul>
