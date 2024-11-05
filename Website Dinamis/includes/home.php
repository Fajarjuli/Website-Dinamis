<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Flutter Inspired</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .header {
            width: 100%;
            text-align: center;
            padding: 40px;
            background-color: #0dcaf0;
            margin-top: 65px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 2.5rem;
            color: #f5f5f5;
            margin-bottom: 10px;
        }

        .header p {
            color: #FF681F;
            font-size: 1.1rem;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            border-radius: 10px;
            /* Add border radius */
            overflow: hidden;
            /* Ensure child elements respect border radius */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .column {
            flex: 0 0 33.333%;
            padding: 10px;
            box-sizing: border-box;
        }

        .left {
            padding-right: 10px;
        }

        .center {
            padding-left: 5px;
            padding-right: 5px;
        }

        .right {
            padding-left: 10px;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 500px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: rotate(2deg);
            background-color: #f0f8ff;
        }

        .card-image {
            width: 100%;
            height: 250px;
            display: block;
            border: none;
            align-items: center;
            padding: 0;
            margin: 0;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            /* Rounded top corners */
        }

        .card-content {
            flex-grow: 1;
            padding: 20px;
        }

        .card-title {
            margin: 0 0 10px 0;
            font-size: 1.25rem;
            color: #333;
        }

        .card-text {
            margin: 0 0 15px 0;
            color: #666;
            font-size: 0.95rem;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            /* Add border radius */
            transition: background 0.6s ease-in-out;
        }

        .btn:hover {
            background: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        .btn-large {
            padding: 12px 24px;
            font-size: 1.1rem;
        }

        .custom-btn {
            background-color: #606060;
            color: white;
        }

        @media (max-width: 992px) {
            .column {
                flex: 0 0 50%;
            }

            .header h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .column {
                flex: 0 0 100%;
            }

            .left,
            .center,
            .right {
                padding: 10px;
            }

            .header h1 {
                font-size: 1.8rem;
            }

            .header p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Selamat Datang di Website Saya!</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $features = [
                [
                    "image" => "assets/images/github.png",
                    "title" => "Github Saya",
                    "description" => "Projek Saya Akan Saya Upload Di Github Ini",
                    "url" => "https://github.com/Fajarjuli"
                ],
            ];

            foreach ($features as $index => $feature) {
                if ($index % 3 == 0) {
                    echo '<div class="column left">';
                } elseif ($index % 3 == 1) {
                    echo '<div class="column center">';
                } else {
                    echo '<div class="column right">';
                }

                echo '<div class="card">';
                echo '<img src="' . $feature["image"] . '" alt="' . $feature["title"] . '" class="card-image">';
                echo '<div class="card-content">';
                echo '<h2 class="card-title">' . $feature["title"] . '</h2>';
                echo '<p class="card-text">' . $feature["description"] . '</p>';
                echo '</div>';
                echo '<a href="' . $feature["url"] . '" class="btn">Lihat Detail</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    

        <div class="text-center" style="margin-top: 40px; margin-bottom: 40px;">
            <!-- Additional content can be added here -->
        </div>
    </div>
</body>

</html>