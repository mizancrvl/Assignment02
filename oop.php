<?php
class Book {
 // TODO: Add properties as Private
 private $title;
 private $availableCopies;
 
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
     $this->title = $title;
     $this->availableCopies = $availableCopies;
     }


// TODO: Add getTitle method

function getTitle(){
    return $this->title;

}
 



 // TODO: Add getAvailableCopies method
 
function getAvailableCopies(){
    
    global $borrowedBooks;
    global $returnedBooks;
    return $this->availableCopies+$returnedBooks-$borrowedBooks;
    
}


 // TODO: Add borrowBook method
 
public function borrowBook(){
    
    global $borrowedBooks;
    $this->availableCopies = $this->availableCopies-$borrowedBooks;
    return $this->availableCopies;
}


 // TODO: Add returnBook method
 function returnBook(){
    
    global $returnedBooks;
    $this->availableCopies = $this->availableCopies+$returnedBooks;
    return $this->availableCopies;
    
 }
 
}


class Member {
 // TODO: Add properties as Private

private $name;

 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }



 // TODO: Add getName method
 function getName(){
    return $this->name;
 }
 
 // TODO: Add borrowBook method
  public static function borrowBook($numberOfBooks = 0){
   return $numberOfBooks;
    
 }
 // TODO: Add returnBook method
 public static function returnBook($numberOfBooks = 0){
    return $numberOfBooks;

 }
 
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
/*
Book 1 - Name: The Great Gatsby, Available Copies: 5.
Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
*/
$Book1 = new Book('The Great Gatsby',5);
$Book2 = new Book("To Kill a Mockingbird",3);

//echo $Book1->getTitle();
//echo $Book1->getAvailableCopies();

// TODO: Create 2 members with the following properties
/*
Member 1 - Name: John Doe
Member 2 - Name: Jane Smith

*/
$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");

//echo $Member1->getName();

// TODO: Apply Borrow book method to each member
 $borrowedBooks = $Member1->borrowBook(1);
 $returnedBooks = $Member1->returnBook(0);

 $borrowedBooks = $Member2->borrowBook(1);
 $returnedBooks = $Member2->returnBook();


// TODO: Print Available Copies with their names:
echo "Available Copies of       "."'".$Book1->getTitle()."'".": " .$Book1->getAvailableCopies()."</br>";
echo "Available Copies of       "."'".$Book2->getTitle()."'".": ".$Book2->getAvailableCopies();



