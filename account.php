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

<body onload="togglePassword()">

  <?php
  echo "<h1> Welcome </h1>";
  // $stars = starToggle($pass);
  if (isset($_POST['submit'])) {
    echo "Username : " . $email . "<br>";
    echo "Password : " . $pass;
  }
  ?>

  <!-- add code here -->
  <script>
    let hide = false;
    let globalPassword = "<?php echo $pass ?>"

    function togglePassword() {
      hide ? document.getElementById('showPassword').innerText = globalPassword : document.getElementById('showPassword').innerText = "*".repeat(globalPassword.length)
    }
  </script>

  <div id="showPassword"></div>

  <!-- end show result -->



  <button id="showPassword" onclick="hide = !hide;console.log(hide);togglePassword()">show</button>
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