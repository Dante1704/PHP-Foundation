<!-- separo logica de php del html -->
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
];

$filteredBooks = array_filter($booksTwo, function ($book) {
    return $book['releaseYear'] >= 2000;
});

/* aca cargo la vista para ser mostrado el contenido */

require "index.view.php";