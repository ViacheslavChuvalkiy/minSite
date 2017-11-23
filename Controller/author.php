<?php


$text= ' Hi, this is autors text';


function loadBooks() {
    $str= file_get_contents('books.txt');
    $authors= unserialize($str);

    return $authors;
}

$authors= loadBooks();