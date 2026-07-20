<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colorful PHP Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            color: white;
        }

        nav {
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: #ffeb3b;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .btn {
            background: #ffeb3b;
            color: #333;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card {
            background: white;
            color: #333;
            padding: 25px;
            width: 250px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .card h3 {
            color: #6a11cb;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 30px;
        }
    </style>
</head>

<body>

    <nav>
        <h2>🌈 My Website</h2>

        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Welcome to My Website 🚀</h1>

        <p>
            This colorful website is running on an AWS EC2 server!
        </p>

        <a href="#" class="btn">Explore Now</a>
    </section>

    <section class="cards">

        <div class="card">
            <h3>💡 Creative</h3>
            <p>Beautiful and colorful design.</p>
        </div>

        <div class="card">
            <h3>⚡ Fast</h3>
            <p>Powered by PHP and Apache.</p>
        </div>

        <div class="card">
            <h3>☁️ Cloud</h3>
            <p>Hosted on AWS EC2.</p>
        </div>

    </section>

    <footer>
        <p>© 2026 My Colorful PHP Website</p>
    </footer>

</body>
</html>
