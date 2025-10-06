<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', "Comic Sans MS", cursive, sans-serif;
            background: #f5f3ea;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            scroll-behavior: smooth;
        }

        h3 {
            font-size: 2rem;
            color: #333;
            text-shadow: 1px 1px 0 #fff;
            margin-bottom: 20px;
        }

        .polaroid-card {
            background: #fff;
            border: 1px solid #ccc;
            border-bottom: 10px solid #ddd;
            width: 350px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            transform: rotate(-2deg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .polaroid-card:hover {
            transform: rotate(0deg) scale(1.05);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        .photo {
            width: 100%;
            height: 220px;
            background-image: url('https://m.media-amazon.com/images/M/MV5BNjNjNDIxNzgtN2QyYS00YTJmLWFkOWYtN2Q2OWRmYzFmZTAyXkEyXkFqcGc@._V1_.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .text {
            font-family: "Bradley Hand", cursive;
            font-size: 1.2rem;
            color: #222;
            line-height: 1.5;
        }

        .back-btn {
            margin-top: 30px;
            text-decoration: none;
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 20px;
            box-shadow: 3px 3px 0 #000;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #555;
            transform: translateY(-3px);
        }

        .color {
            color: #0077cc;
        }

        @media (max-width: 900px) {
            .polaroid-card {
                width: 300px;
                padding: 15px;
            }

            .photo {
                height: 180px;
            }

            h3 {
                font-size: 1.8rem;
            }

            .text {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            .polaroid-card {
                width: 90%;
                padding: 15px;
                transform: none;
            }

            .photo {
                height: 160px;
            }

            h3 {
                font-size: 1.6rem;
            }

            .text {
                font-size: 1rem;
            }

            .back-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }

    </style>
</head>

<body>
    <h3>BMI Calculator</h3>

    <div class="polaroid-card">
        <div class="photo"></div>
        <div class="text">
            <?php
            $weight = 50;
            $height = 1.60;
            $bmi = $weight / ($height * $height);

            echo "Given:<br> Weight = <span class='color'>$weight kg</span><br> Height = <span class='color'>$height m</span><br><br>";
            echo "BMI = <span class='color'>" . round($bmi, 2) . "</span>";

            ?>
        </div>
    </div>

    <a href="index.php" class="back-btn">Home</a>

</body>

</html>