<?php
  require_once 'config_seesion.inc.php';

  require_once 'signup_view.inc.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-error{color: red;}

        .form-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-separator {
            text-align: center;
            margin: 10px 0;
            color: #aaa;
        }
        .form-succes{
            color: green;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login and Sign Up</h2>
        <form action="loginup.inc.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit">Log In</button>
        </form>
        <div class="form-separator">or</div>
        <form action="signup.inc.php" method="POST">
        <?php
 signup_inputs()    ?>

            <button type="submit">Sign Up</button>
        </form>
    </div>

    <?php


check_signup_errors();
    ?>
</body>
</html>
