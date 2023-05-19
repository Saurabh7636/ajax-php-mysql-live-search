<?php
require_once "db.php";

if (isset($_POST['query'])) {
  $query = "SELECT * FROM countries WHERE name LIKE '{$_POST['query']}%'";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) {
      echo $res['name'] . "<br/>";
    }
  } else {
    echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Country not found
      </div>
      ";
  }
}
