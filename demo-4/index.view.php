<!-- en este modulo va a estar todo lo que es mostrado y lo que es iterado para ser mostrado -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo 4</title>
    <style>
        body {
            margin:0;
            font-family: sans-serif;
         }
    </style>
</head>

<body>
    <h1>Recommended Books</h1>
    

    <ul>
        <?php foreach ($filteredBooks as $book) : ?> 
            <li>
                <!-- this shows associative arrays are similar to js objects -->
                <a href="<?= $book['purchaseUrl'] ?>"> 
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>