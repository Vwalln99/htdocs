<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/pico.css">
    <link rel="stylesheet" href="/css/pico.classless.min.css">
    <title>Image Gallery</title>
</head>

<body>
    <header>
        <h1>Image Gallery</h1>
        <nav>
            <ul>
                <li><a href="../../index.php"></a></li>
                <li><a href="../../login/login.php"></a></li>
                <li><a href="../../login/logout.php"></a></li>
            </ul>
        </nav>
    </header>
    <main class="grid">
        <?php echo $content ?? ""; ?>
    </main>
    <footer>
        <p>|edvgraz|</p>
    </footer>
</body>

</html>