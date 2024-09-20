<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote for Me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 5rem;
        }
        .left-column {
            width: 45%;
            text-align: center;
            padding-right: 20px;
        }
        .right-column {
            width: 50%;
            background-color: #f0f0ff;
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: px;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 60px;
        }
        .vote-button {
            background-color: #ff4500;
            color: white;
            border: none;
            padding: 20px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            margin-top: em;
            border-radius: 50px;
            text-decoration: none;
        }
        .vote-button a{
            text-decoration: none;
        }
        .right-column img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

                /* Responsive styles */
                @media (max-width: 768px) {
            .content {
                flex-direction: column;
                margin-top: 2rem;
            }
            .left-column, .right-column {
                width: 100%;
                padding: 0;
                margin-bottom: 2rem;
            }
            .left-column {
                order: 2;
            }
            .right-column {
                order: 1;
                width: 80%;
            }
            h1 {
                font-size: 2em;
            }
            p {
                margin-bottom: 30px;
            }
            .vote-button {
                padding: 15px 15px;
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            h1 {
                font-size: 1.8em;
            }
            p {
                font-size: 1em;
            }
            .vote-button {
                padding: 12px 12px;
                font-size: 0.9em;
            }
        }

    </style>
</head>
<body>
    <div class="content">
        <div class="left-column">
            <h1>Vote for Me</h1>
            <p>Your support means a lot! Cast your vote to help me win this modeling contest.</p>
            <a href="voteme.php" class="vote-button">Click here to vote for me</a>
        </div>
        <div class="right-column">
            <img src="https://images.unsplash.com/photo-1462804993656-fac4ff489837?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        </div>
    </div>
</body>
</html>