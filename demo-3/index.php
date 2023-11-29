<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo 3</title>
    <style>
        body {
            margin:0;
            font-family: sans-serif;
         }
    </style>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php 
         //Array declaration
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ]; 

         //Associative Array declaration (Kind of an Object)
        $booksTwo = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'releaseYear' => 1968,
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://exampleBuy.com',
            ],
            [
                'name' => 'The Martian',
                'releaseYear' => 2011,
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://exampleBuy.com',
            ],
            [
                'name' => 'Project Hail Mary',
                'releaseYear' => 2021,
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://exampleBuy.com',
            ],
        ]
    ?>

    
    <!-- <ul>
        //array iteration
        <?php 
            foreach ($books as $book) {
                echo "<li>{$book} tm</li>"; //the tm is no part of the variable
            } 
        ?>
    </ul> -->

    <!-- another way to do de same -->
    <!-- array iteration -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Accessing to an element of an array</p>
    <p>
        <!-- Accessing an element of an array -->
        <?= $books[2] ?>
    </p>

    <p>Accessing to an array of associative arrays</p>

    <ul>
        <?php foreach ($booksTwo as $book) : ?>
            <li>
                <!-- this shows associative arrays are similar to js objects -->
                <a href="<?= $book['purchaseUrl'] ?>"> 
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


    <p>Accessing to the books that the author is Andy Weir</p>
    <!-- <ul>
        <?php foreach ($booksTwo as $book) : ?>
            if condition with the abreviated notation
            <?php if($book['author'] === 'Andy Weir') :?>
                <li>
                   this shows associative arrays are similar to js objects 
                    <a href="<?= $book['purchaseUrl'] ?>"> 
                        <?= $book['name']; $book['releaseYear'] ?> - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul> -->
    <!-- function declaration -->
    <?php
        function filterByAuthor($books, $author) {

            $filteredBooks = [];
            foreach ($books as $book) {
                if($book['author'] === $author) {
                    $filteredBooks[] = $book;
                };
            }
            return $filteredBooks;
        }

        $filteredBooks = filterByAuthor($booksTwo, 'Andy Weir') 
    ?>

    <ul>
       <!--  looping the books with the filter included as a function -->
        <?php foreach ($filteredBooks as $book) : ?> 
            <li>
                <!-- this shows associative arrays are similar to js objects -->
                <a href="<?= $book['purchaseUrl'] ?>"> 
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>



    <p>Accessing to the books that the author is Philip K. Dick</p>
    <!-- anonymmous function declaration known as Lambda-->
    <?php
        $filterByAuthor = function ($books, $author) {
            $filteredBooks = [];
            foreach ($books as $book) {
                if($book['author'] === $author) {
                    $filteredBooks[] = $book;
                };
            }
            return $filteredBooks;
        };
        $filteredBooks = $filterByAuthor($booksTwo, 'Philip K. Dick') 
    ?>
    <!-- looping the books with the filter included as a function -->
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

    <p>Accessing to the books that the author is Philip K. Dick with a more flexible filter() function</p>
    <?php
    /* filter can filter by any criteria, not only by Authors */
        function filter($items, $key, $value) {
            $filteredItems = [];
            foreach ($items as $item) {
                if($item[$key] === $value) {
                    $filteredItems[] = $item;
                };
            }
            return $filteredItems;
        };
        $filteredBooks = filter($booksTwo, 'author', 'Philip K. Dick') 
    ?>

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

    <p>
        Accessing to the books that the release year is greater than 2000 with an <span style="color:green; font-weight:bold">EVEN MORE</span> flexible filter() function
        that not only checks for equality but for any operator
    </p>

    <?php
    /* filter can filter by any criteria, and operator */
    /*  
        function filterItems($items, $fn) {
                $filteredItems = [];
                foreach ($items as $item) {
                    if($fn($item)) {
                        $filteredItems[] = $item;
                    }
                }
                return $filteredItems;
            }; 
        $filteredBooks = filter($booksTwo, function ($book) {
            return $book['releaseYear'] >= 2000;
        });
    */

    /* buit-in array filter method */
    $filteredBooks = array_filter($booksTwo, function ($book) {
        return $book['releaseYear'] >= 2000;
    });
    ?>

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