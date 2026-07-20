<?php
    $name = "Varunavi";
    $year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NovaSpace | Creative Digital World</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f6f8ff;
            color: #1f2937;
        }

        /* Navigation */
        nav {
            height: 75px;
            padding: 0 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #6c63ff;
        }

        .logo span {
            color: #ff6584;
        }

        nav a {
            text-decoration: none;
            color: #555;
            margin-left: 28px;
            font-weight: 500;
        }

        nav a:hover {
            color: #6c63ff;
        }

        /* Hero Section */
        .hero {
            min-height: 520px;
            padding: 90px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, #6c63ff, #8f7cff, #ff6584);
            color: white;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 58px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #ffe66d;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 35px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: white;
            color: #6c63ff;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .hero-icon {
            font-size: 170px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Features */
        .features {
            padding: 70px 8%;
            text-align: center;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }

        .subtitle {
            color: #777;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            width: 280px;
            padding: 35px 25px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #6c63ff;
            margin-bottom: 12px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        /* PHP Message */
        .message {
            margin: 20px auto;
            width: fit-content;
            padding: 12px 25px;
            background: #e0e7ff;
            color: #4338ca;
            border-radius: 25px;
            font-weight: bold;
        }

        /* Footer */
        footer {
            padding: 25px;
            text-align: center;
            background: #1f2937;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .hero {
                text-align: center;
                flex-direction: column;
                padding: 70px 20px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .hero-icon {
                font-size: 100px;
                margin-top: 40px;
            }

            nav {
                padding: 0 20px;
            }

            nav a {
                margin-left: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="logo">
            Nova<span>Space</span> 🚀
        </div>

        <div>
            <a href="#">Home</a>
            <a href="#features">Features</a>
            <a href="#about">About</a>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-text">

            <h1>
                Build Your <span>Digital Future</span>
            </h1>

            <p>
                Welcome to NovaSpace — a modern website powered by PHP,
                hosted on AWS EC2, and designed for the future.
            </p>

            <a href="#features" class="btn">
                Explore More ✨
            </a>

        </div>

        <div class="hero-icon">
            🌌
        </div>

    </section>


    <!-- PHP Dynamic Message -->
    <div class="message">
        👋 Welcome, <?php echo $name; ?>!
    </div>


    <!-- Features Section -->
    <section class="features" id="features">

        <h2>Why Choose NovaSpace?</h2>

        <p class="subtitle">
            Simple technology. Beautiful design. Powerful possibilities.
        </p>

        <div class="cards">

            <div class="card">
                <div class="card-icon">⚡</div>

                <h3>Fast Performance</h3>

                <p>
                    Experience a fast and smooth website powered by
                    Apache and PHP.
                </p>
            </div>


            <div class="card">
                <div class="card-icon">☁️</div>

                <h3>AWS Cloud</h3>

                <p>
                    Hosted on a powerful Amazon EC2 cloud server
                    accessible from anywhere.
                </p>
            </div>


            <div class="card">
                <div class="card-icon">🎨</div>

                <h3>Beautiful Design</h3>

                <p>
                    A clean, colorful, and responsive design that
                    works on all devices.
                </p>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            © <?php echo $year; ?> NovaSpace | Built with 💜 using PHP & AWS
        </p>

    </footer>

</body>
</html>