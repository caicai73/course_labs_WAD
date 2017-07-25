<?php
namespace wp;
/** A class that defines products */
class Product{
// Member variables
public $name; // public allow access from within and outside of this class
var $description; // var also means public
protected $price; // protected variables can only be access from this and it’s parent
// and subclasses
private $image; // private variables can only be access from this class
// Constructor (note: there are 2 under scrolls before construct)
function __construct($name, $description, $price, $image){
$this->name = $name;
$this->description = $description;
$this->price = $price;
$this->image = $image;
}
// Accessors/Getters
public function getPrice(){
return $this->price;
}
function getImage(){ // this is also public
return $this->image;
}
// Mutator or setter
function setPrice($price){
$this->price = $price;
}

}
?>