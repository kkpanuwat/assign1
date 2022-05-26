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
    }

    form {
      color: black;
    }

    input {
      color: black;
    }

    .error {
      color: red;
    }

    .far .fa-eye {
      margin-left: -30px;
      cursor: pointer;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>

  <?php
  $passErr = $emailErr = "";
  $pass = $email = "";
  $_SESSION["email"] = "";
  $_SESSION["pass"] = "";

  //Heading//
  echo "<h1> Hi user </h1>";
  echo "<p> please fill out the blank </p>";

  //error check//
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "E-mail is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["pass"])) {
      $passErr = "Password is required";
    } else {
      $pass = test_input($_POST["pass"]);
    }
  }

  $_SESSION["email"] = $email;
  $_SESSION["pass"] = $pass;

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <form action="account.php" method="post" id="myform" name="myform">
    <div class=username> E-mail:
      <input type="email" name="email" required>
      <span class="error">* required<?php echo $emailErr; ?></span>
      <br><br>
    </div>
    <div class=password> Password:
      <input type="password" name="pass" autocomplete="current-password" id="id_password" minlength="6" maxlength="8" required>
      <i class="far fa-eye" id="togglePassword"></i>
      <span class="error">* required <?php echo $passErr; ?></span>
      <br><br>
    </div>
    <div class=butt><input type="submit" id="button" name="submit" value="Sign in"></div>
  </form>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function(e) {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>


</body>

</html>