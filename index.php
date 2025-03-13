<?php 

require_once __DIR__ . '/CookBooks.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Bookshelf</title>
    <link rel="stylesheet" href="styles.css"> 
</head>

<body>

    <header>
        <h1>Welcome to the Mega Bookshelf</h1>
    </header>

    <main>
        <section class="bookshelf"> <!-- Container for bookshelf. Book foreach goes within section tags -->

        <?php foreach ($cookbooks as $book):
         ?> <div class="book"></div>
        <?php endforeach; ?>

        </section>
    </main>

    <footer>

    </footer>

    <script src=""></script> <!-- Fill this with correct path to JS file -->

</body>

</html>