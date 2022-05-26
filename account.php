<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
  <style>
    body {
      background-color: wheat;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      font-size: large;
    }

    .error {
      color: red;
    }

    .far .fa-eye {
      margin-left: -30px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <?php
  echo "<h1> Welcome </h1>";
  $pass = "";
  $email = "";
  // $stars = starToggle($pass);
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo "Username : " . $email . "<br>";
    $pass = $_POST['pass'];
    echo "Password : " . $pass;
  }
  ?>
  <div id="showPassword"><?php
                          echo starToggle($pass) ?></div>
  <button id="showPassword" onclick="starToggle($pass)">show</button>
  <div class=butt>
    <button onclick="history.back()">Back</button>
  </div>
  <?php
  function starToggle($pass)
  { {
      $pass = strlen($pass);
      $number = 0;
      $stars = "";
      while ($number != $pass) {
        $stars = $stars . "*";
        $number++;
      }
      return $stars;
    }
    echo "(Hide)Password : " . starToggle($pass);
    
  }


  ?>
  <script>

  </script>



</body>

</html>
<html>

<body>