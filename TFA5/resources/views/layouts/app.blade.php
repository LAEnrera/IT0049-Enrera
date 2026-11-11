<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel POS</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            background: #1f2937;
            padding: 16px 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 24px;
            font-weight: bold;
        }

        nav a:hover {
            color: #60a5fa;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #1f2937;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }

        th, td {
            border: 1px solid #d1d5db;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #1f2937;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customers</a>
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>