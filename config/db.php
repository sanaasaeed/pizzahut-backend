<?
$link = mysqli_connect('localhost', 'root', '', 'pizza');

if (mysqli_connect_errno()) {
  echo "Error: " . mysqli_connect_errno();
}
