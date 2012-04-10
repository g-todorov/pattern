<?php

//addapter pattern-a se izpolzva za da promeni interfeisa na daden klas za da syzdade klas
//koito naprimer klienta bi izpolzval. v sluchaq imame 2 klasa SimpleBook i Bookadapter kato 
//celta na Book adapter e da obedeni getAuthor() i getTitle() vyv svoi sobstecen metod getAuthorAndTitle()

class SimpleBook {
    private $author;
    private $title;
    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class BookAdapter {
    private $book;
    function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }
    function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}

?>