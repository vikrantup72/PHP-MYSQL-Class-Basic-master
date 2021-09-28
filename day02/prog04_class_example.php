<?php
class test
{
    function do_test()
    {
        echo "<h3>This is test class</h3>Testing class function."; 
    }

}
class book
{
    function book_store()
    {
        echo "<br><h3>This is test class</h3>there are 50 books in my store";
    }
}
$an_object = new test;
$an_object->do_test();

$bk = new book;
$bk->book_store();
?> 
