<?php

require_once __DIR__ . '/CookBooks.php';
require_once __DIR__ . '/sortBooks.php';

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

    <article>
        <form method="GET">
            <label for="sort">Sort by:</label>
            <select name="sort" id="sort" onchange="this.form.submit()">
                <option value="title_asc" <?= $sortOption == 'title_asc' ? 'selected' : '' ?>>Title A-Z</option>
                <option value="title_desc" <?= $sortOption == 'title_desc' ? 'selected' : '' ?>>Title Z-A</option>
                <option value="author_asc" <?= $sortOption == 'author_asc' ? 'selected' : '' ?>>Author A-Z</option>
                <option value="author_desc" <?= $sortOption == 'author_desc' ? 'selected' : '' ?>>Author Z-A</option>
            </select>
        </form>
    </article>

    <article>
        <form action="get">
            <label for="search"></label>
            <textarea name="search" id="search"></textarea>
            <button type="submit">SEARCH</button>
        </form>
    </article>

    <main>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <section class="bookshelf"> <!-- Container for bookshelf. Book foreach goes within section tags -->


                <?php foreach ($cookbooks as $book):
                    $minHeight = 150;
                    $maxHeight = 200;
                    $color = sprintf("#%06X", mt_rand(0, 0xFFFFFF)); // Slumpmässig färg i hex
                    $height = mt_rand($minHeight, $maxHeight);
                ?> <div class="book" style=" background-color: <?= $color ?>; height: <?= $height ?>px">
                        <p><?= $book['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php endfor; ?>
    </main>

    <footer>

    </footer>

    <script src=""></script> <!-- Fill this with correct path to JS file -->

</body>

</html>