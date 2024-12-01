<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
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
        <marquee behavior="scroll" direction="left">Kindly fill the form! Thanks</marquee>
    </div>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="seo.php" method="POST">
              
                
                <div class="input-group">
                    <label for="user">user</label>
                    <input type="text" name="user" placeholder="Enter your name" required>
                </div>

                <div class="input-group">
                    <label for="course">course</label>
                    <input type="text" name="course" placeholder="Enter your course name" required>
                </div>

                <div class="input-group">
                    <label for="phone">phone</label>
                    <input type="text" name="phone" placeholder="Enter your phone" required>
                </div>
                <div class="input-group">
                    <label for="email">email</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>

                

                <div class="remember-me">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">Submit</button>
                <br>
                <br>
                <button type="reset" class="btn-login">Reset data</button>
            </form>
        </div>
    </div>

</body>
</html>
