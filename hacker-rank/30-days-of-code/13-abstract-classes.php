<?php
// REF: https://www.hackerrank.com/challenges/30-abstract-classes/problem

abstract class Book
{
    protected $title;
    protected $author;

    public function __construct($t, $a)
    {
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class
class MyBook extends Book
{
    protected $price;

    public function __construct(string $title, string $author, int $price)
    {
        $this->title = trim($title);
        $this->author = trim($author);
        $this->price = $price;
    }

    public function display()
    {
        echo "Title: ".$this->title . PHP_EOL;
        echo "Author: ".$this->author . PHP_EOL;
        echo "Price: ".$this->price . PHP_EOL;
    }
}

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title, $author, $price);
$novel->display();
