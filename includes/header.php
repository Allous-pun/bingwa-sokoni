<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingwa Sokoni</title>
    <style>
        /* Reset and Base Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5dc; /* Cream white */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            position: fixed; /* Fix the header to the top */
            top: 0; /* Ensure it stays at the top */
            left: 0;
            width: 100%; /* Make it span the full width of the screen */
            z-index: 1000; /* Ensure it stays above other content */
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header img {
            height: 40px;
            margin-right: 10px;
        }

        .header .title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-left: auto; /* Ensures title is pushed to the far right */
            margin-right: 50px !important;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .header .title {
                font-size: 1rem;
                text-align: right;
            }
            .header {
                padding: 10px 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./assets/images/logo-saf.png" alt="Logo">
        </div>
        <div class="title">Agent Johnson</div>
    </header>
</body>
</html>
