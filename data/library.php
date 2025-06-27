<?php

namespace Data;

require_once 'data/book.php';

interface Library
{
    function rent(string $name): Book;
}

class NovelShelf implements Library
{
    function rent(string $name): Novel
    {
        $book = new Novel();
        $book->name = $name;
        return $book;
    }
}
