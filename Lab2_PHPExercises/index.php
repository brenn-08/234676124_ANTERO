<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2: PHP Exercises</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', "Comic Sans MS", cursive, sans-serif;
            background: #f5f3ea;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            scroll-behavior: smooth;
        }

        h1 {
            text-align: center;
            margin: 0.5in 0 20px 0;
            font-size: 2.5rem;
            color: #333;
            text-shadow: 1px 1px 0 #fff;
        }

        .polaroid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            width: calc(100% - 1in);
            margin-top: 0.3in;
            margin-bottom: 0.5in;
        }

        .button {
            position: relative;
            background: white;
            border: 1px solid #ccc;
            border-bottom: 8px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 10px;
            transform: rotate(calc(-2deg + 4deg * random()));
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .button:nth-child(odd) {
            transform: rotate(-2deg);
        }

        .button:nth-child(even) {
            transform: rotate(2deg);
        }

        .button img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 2px;
        }

        .button:hover {
            transform: scale(1.05) rotate(0deg);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }

        .button a {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .caption {
            text-align: center;
            margin-top: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: #222;
            font-family: "Bradley Hand", cursive;
        }

        .bubble {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #222;
            color: #fff;
            font-size: 0.9rem;
            padding: 6px 10px;
            border-radius: 20px;
            display: none;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .button:hover .bubble {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1200px) {
            .polaroid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 900px) {
            .polaroid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .polaroid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <h1>Lab2: PHP Exercises</h1>

    <div class="polaroid">

        <div class="button">
            <a href="intro.php">
                <img src="https://staticg.sportskeeda.com/editor/2025/07/a4ef9-17517472871110-1920.jpg?w=640"
                    alt="photo">
                <div class="caption">Introduce Yourself</div>
                <div class="bubble">HELLO!</div>
            </a>
        </div>

        <div class="button">
            <a href="math.php">
                <img src="https://arumjournal.com/wp-content/uploads/2025/07/screenshot-2025-07-14-at-2.12.29-pm.png?w=1024&h=666&crop=1"
                    alt="photo">
                <div class="caption">Simple Math</div>
                <div class="bubble">1+1?</div>
            </a>
        </div>
        <div class="button">
            <a href="rect.php">
                <img src="https://static.animecorner.me/2025/07/1752754939-f97661b1b914f8e3a7a459bee4dc79dd-768x432.jpg"
                    alt="photo">
                <div class="caption">Area and Perimeter of a Rectangle</div>
                <div class="bubble">GET RECT!</div>
            </a>
        </div>
        <div class="button">
            <a href="temp_conv.php">
                <img src="https://i0.wp.com/inasianspaces.com/wp-content/uploads/2025/08/the-fragrant-flower-blooms-with-dignity-kaoruko-and-subaru-at-cafe.jpg?resize=840,473&ssl=1"
                    alt="photo">
                <div class="caption">Temperature Converter</div>
                <div class="bubble">HOT!</div>
            </a>
        </div>
        <div class="button">
            <a href="var.php">
                <img src="https://m.media-amazon.com/images/M/MV5BMTcyZTE0YTMtNjJlYi00YTRmLTk2NWUtNDJlOWU2MzM5YWNhXkEyXkFqcGc@._V1_QL75_UX388_.jpg"
                    alt="photo">
                <div class="caption">Swapping Variables</div>
                <div class="bubble">SWAP!</div>
            </a>
        </div>
        <div class="button">
            <a href="s_calc.php">
                <img src="https://m.media-amazon.com/images/M/MV5BMTNlZGJhMzUtMTFlZS00NDE5LWIwMWItNzA1NDk4YTQwNDBiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    alt="photo">
                <div class="caption">Salary Calculator</div>
                <div class="bubble">$$$</div>
            </a>
        </div>
        <div class="button">
            <a href="b_calc.php">
                <img src="https://m.media-amazon.com/images/M/MV5BNjNjNDIxNzgtN2QyYS00YTJmLWFkOWYtN2Q2OWRmYzFmZTAyXkEyXkFqcGc@._V1_.jpg"
                    alt="photo">
                <div class="caption">BMI Calculator</div>
                <div class="bubble">SLAY!</div>
            </a>
        </div>
        <div class="button">
            <a href="str_man.php">
                <img src="https://i.redd.it/kaoru-hana-wa-rin-to-saku-the-fragrant-flower-blooms-with-v0-14ze47dz6qlf1.jpg?width=1200&format=pjpg&auto=webp&s=e6186f789c3742ef0808e945b59e8aa6609a56e6" alt="photo">
                <div class="caption">String Manipulation</div>
                <div class="bubble">LOL!</div>
            </a>
        </div>
        <div class="button">
            <a href="ba_sim.php">
                <img src="https://fwmedia.fandomwire.com/wp-content/uploads/2025/09/07230322/Screenshot-2347.png?width=800&height=500&quality=85&sharpen=true&format=webp&aspect_ratio=800%3A500&crop=center"
                    alt="photo">
                <div class="caption">Bank Account Simulation</div>
                <div class="bubble">CHA-CHING!</div>
            </a>
        </div>
        <div class="button">
            <a href="grade.php">
                <img src="https://fwmedia.fandomwire.com/wp-content/uploads/2025/09/07225805/Screenshot-2355-1024x576.png" alt="photo">
                <div class="caption">Simple Grading System</div>
                <div class="bubble">A+!</div>
            </a>
        </div>
        <div class="button">
            <a href="cur_conv.php">
                <img src="https://arumjournal.com/wp-content/uploads/2025/09/screenshot-2025-09-27-at-6.02.52-pm.png?w=1024&h=666&crop=1"
                    alt="photo">
                <div class="caption">Currency Converter</div>
                <div class="bubble">WOW!</div>
            </a>
        </div>
        <div class="button">
            <a href="tc_est.php">
                <img src="https://cdn.imgchest.com/files/f2d7bdc180ac.jpg"
                    alt="photo">
                <div class="caption">Travel Cost Estimator</div>
                <div class="bubble">GO!</div>
            </a>
        </div>
    </div>

</body>

</html>