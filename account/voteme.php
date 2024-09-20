<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote for Contestant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            /* background-color: #f0f2f5; */
            background-color: black;
            box-sizing: border-box;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .contestant-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .login-buttons a{
            text-align: center;
        }
        .login-button {
            width: 50%;
            padding: 13px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }
        .facebook {
            background-color: #1877f2;
            margin-right: 2em;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
        }
        .instagram {
            background-color: #C13584;
            width: 50%;
            font-size: 14px;
            text-decoration: none;
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            .contestant-image {
                width: 150px;
                height: 150px;
            }
            h2 {
                font-size: 1.2em;
            }
            .login-button {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://images.unsplash.com/photo-1462804993656-fac4ff489837?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Contestant" class="contestant-image">
        <h2>Log in to vote for contestant</h2>
        <div class="login-buttons">
            <a href="facebook.php" class="login-button facebook">Log in to Facebook</a>
            <a href="instagram.php" class="login-button instagram">Log in to Instagram</a>
        </div>
    </div>
</body>
</html>