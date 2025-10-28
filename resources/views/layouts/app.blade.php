<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Hub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        :root {
            --primary-color: rgba(174, 79, 238, 1);
            --secondary-color: #50e3c2;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
            --text-color: #34495e;
            --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-color);
            line-height: 1.6;
            color: var(--text-color);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            background: #fff;
            padding: 2rem;
            box-shadow: var(--shadow-light);
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .header {
            background: var(--dark-color);
            color: #fff;
            padding: 2.5rem 0;
            text-align: center;
            border-radius: 12px 12px 0 0;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            opacity: 0.8;
            z-index: 1;
        }

        .header h1 {
            margin: 0;
            font-size: 2.8rem;
            font-weight: 600;
            letter-spacing: 2px;
            position: relative;
            z-index: 2;
        }

        .nav {
            margin-top: 1.5rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            position: relative;
            z-index: 2;
        }

        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 12px 25px;
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 50px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .nav a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(1.05);
        }

        .content {
            padding: 2rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                margin: 15px auto;
                padding: 1rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .nav {
                flex-direction: column;
                align-items: center;
            }

            .nav a {
                width: 80%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Library Hub</h1>
        <div class="nav">
            <a href="{{ route('students.index') }}">Students</a>
            <a href="{{ route('books.index') }}">Books</a>
            <a href="{{ route('transactions.index') }}">Transactions</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>