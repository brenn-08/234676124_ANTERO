<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>

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
            transform: rotate(2deg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .polaroid-card:hover {
            transform: rotate(0deg) scale(1.05);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        .photo {
            width: 100%;
            height: 220px;
            background-image: url('https://arumjournal.com/wp-content/uploads/2025/07/screenshot-2025-07-14-at-2.12.29-pm.png?w=1024&h=666&crop=1');
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
            color: blue;
        }

    </style>
</head>

<body>
    <h3>Simple Math</h3>

    <div class="polaroid-card">
        <div class="photo"></div>
        <div class="text">
            <?php
            $a = 8;
            $b = 9;

            $sum = $a + $b;
            $difference = $a - $b;
            $product = $a * $b;
            $quotient = $a / $b;

            echo "Given numbers: <span class='color'>$a</span> and <span class='color'>$b</span>. <br><br> Sum: $sum <br> Difference: $difference <br> Product: $product <br> Quotient: $quotient"

            ?>

        </div>
    </div>

    <a href="index.php" class="back-btn">Home</a>

</body>

</html>