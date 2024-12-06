<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marquee Headline with Space</title>
  <style>
    .marquee-container {
      background-color: #333;
      color: #fff;
      font-family: 'Arial', sans-serif;
      font-size: 24px;
      font-weight: bold;
      padding: 10px 0; /* Add space at the top and bottom */
      margin: 20px 0;  /* Add space before and after marquee */
      text-align: center;
      border-radius: 5px;
    }

    marquee {
      padding-left: 50px; /* Add space before the text inside the marquee */
      padding-right: 50px; /* Add space after the text inside the marquee */
    }
  </style>
</head>
<body>

  <div class="marquee-container">
    <marquee behavior="scroll" direction="left">Kindly fill the form ! thanks</marquee>
  </div>

</body>
</html>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <label >User</label>
                    <input type="text"  name="user" placeholder="Enter your name" required>
                </div>
                <div class="input-group">
                    <label for="email">phone</label>
                    <input type="text"  name="phone" placeholder="Enter your city" required>
                </div>
                <div class="input-group">
                    <label for="email">city</label>
                    <input type="text"  name="city" placeholder="Enter your phone" required>
                </div>

                <div class="input-group">
                    <label for="password">email</label>
                    <input type="Text"  name="email" placeholder="Enter your email" required>
                </div>

                <div class="remember-me">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">Submit</button>
                <br>
                <br>
                <button type="Reset" class="btn-login">Reset data</button>

                

               
            </form>
        </div>
    </div>

</body>
</html>
