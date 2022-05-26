<?php
session_start();
$pass = "";
$email = "";
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
}
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

<!-- onload page success call toggle function -->
<body onload="togglePassword()">

  <?php
  echo "<h1> Welcome </h1>";
  if (isset($_POST['submit'])) {
    echo "Username : " . $email . "<br>";
    echo "Password : " . $pass;
  }
  ?>

  <!-- add code here -->
  <script>
    // set default flag false => * : true => real password
    let hide = false;
    // store value to variable
    let globalPassword = "<?php echo $pass ?>"

    function togglePassword() {
      // use ternary operator to show correct display
      hide ? document.getElementById('showPassword').innerText = globalPassword : document.getElementById('showPassword').innerText = "*".repeat(globalPassword.length)
    }
  </script>

  <!-- Start show password -->
  <!-- use DOM to update display -->
  <div id="showPassword"></div>
  <!-- end show password-->


  <!-- 1. update flag to show correct display -->
  <!-- 2. call toggle function -->
  <button id="showPassword" onclick="hide = !hide;togglePassword()">show</button>
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