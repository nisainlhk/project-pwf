<?php
require_once 'Book.php';
require_once 'Member.php';
require_once 'DigitalBook.php';

$member = new Member("Nisa Ainul Hakim");
$book = new Book("Harry Potter", "J.K. Rowling");
$digitalBook = new DigitalBook("Blue Sky", "Guanlin", 15);

echo "Member: " . $member->getName() . "<br>";
echo $book->getDetails() . "<br>";
echo $digitalBook->getDetails() . "<br>";
?>