<?php
require_once 'Book.php';

class digitalBook extends Book {

    public function __construct($title, $author) {
        parent::__construct($title, $author);
    }
}
?>