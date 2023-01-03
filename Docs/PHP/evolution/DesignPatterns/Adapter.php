<?php

class TextBook {

    private $title;
    private $author;

    function __construct($title_in, $author_in) {
        $this->title  = $title_in;
        $this->author = $author_in;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthor() {
        return $this->author;
    }
}

class BookAdapter {
    private $book;

    function __construct(TextBook $book_in) {
        $this->book = $book_in;
    }
    public function getTitleAndAuthors() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }

}

  // client

  writeln('BEGIN TESTING ADAPTER PATTERN');
  writeln('');

  $book = new TextBook("Gamma", "Design Patterns");
  $bookAdapter = new BookAdapter($book);
  writeln('Author and Title: '.$bookAdapter->getTitleAndAuthors ());
  writeln('');

  writeln('END TESTING ADAPTER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>
