<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route to load up home page (item list)
Route::get('/', function(){
    $sql = "select * from item order by id desc";
    $items = DB::select($sql);
    return view('items.item_list')->with('items', $items);
});


// Calls the add function to add items to the list
Route::post('/add_item_action', function(){
    $summary = request('summary');
    $details = request('details');
    add_item($summary, $details);
    
    return redirect("/");
});

// Displays the update form page, calls the id so it knows which item to update
Route::get('update_item/{id}', function($id){ 
    $item = get_item($id);
    return view("items.update_item")->with('item', $item);
});

// Calls the update_item_action to update the item details
Route::post('/update_item_action', function(){ 
    $summary = request('summary');
    $details = request('details');
    $id = request('id');
    update_item($id, $summary, $details);
    
    return redirect("/");

});

// Deletes the item with the selected id, then returns to the home page
Route::get('delete_item_action/{id}', function($id){
    $id = delete_item($id);
    return redirect("/");
});

// Function to add a new item, inserts the new item into the database
function add_item($summary, $details) {
    $sql = "insert into item (summary, details) values (?, ?)";
    DB::insert($sql, array($summary, $details));
    $id = DB::getPdo()->lastInsertId();  //returns the last id that was added to the database
    return($id);
}

// Function to get the item from the database
function get_item($id){
    $sql = "select * from item where id=?";
    $items = DB::select($sql, array($id));
    
    if (count($items) != 1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    
    $item = $items[0];
    return $item;
}

// Function to update the item details, gets the variables using the id from the database so it can be edited
function update_item($id, $summary, $details) {
    $sql = "update item set summary = ?, details = ? where id = ?"; 
    DB::update($sql, array($summary, $details, $id));
}

// Function to delete the item from the database. Just needs the id to know which one to delete
function delete_item($id) {
    $sql = "delete from item where id = ?"; 
    DB::delete($sql, array($id));
}