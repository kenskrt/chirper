<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper'}}</title>
    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
        }
        header, footer{
            background:#2c3e50;
            color:white;
            padding:15px;
            text-align:center;
        }
        main{
            padding:20px;
            min-height:70vh;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h2>My Website</h2>
        <p>Welcome to my homepage</p>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>

</body>
</html>
