<?php
class Book {
    protected $title;
    protected $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails() {
        return "Buku: {$this->title} oleh {$this->author}";
    }
}
?>