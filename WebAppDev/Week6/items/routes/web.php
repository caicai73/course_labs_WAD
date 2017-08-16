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

Route::get('/', function(){
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.item_list')->with('items', $items);
});

Route::get('item_detail/{id}', function($id){
    $item = get_item($id);
    return view('items.item_detail')->with('item', $item);
});

// Adds items
Route::get('add_item', function(){
    return view('items.add_item');
});

Route::post('add_item_action', function(){
    $summary = request('summary');
    $details = request('details');
    $id = add_item($summary, $details);
    
    if ($id) {
        return redirect("item_detail/$id");
    } else {
        die('Error while adding item');
    }
});

Route::get('update_item/{id}', function($id){ 
    $item = get_item($id);
    return view("items.update_item")->with('item', $item);
});

Route::post('/update_item_action', function(){ 
    $summary = request('summary');
    $details = request('details');
    $id = request('id');
    $item = update_item($id, $summary, $details);
    
    if ($id) {
        return redirect("item_detail/$id");
    } else {
        die('Error while adding item');
    }
});

Route::get('delete_item_action/{id}', function($id){
    $id = delete_item($id);
    return redirect("/");
});

function add_item($summary, $details) {
    $sql = "insert into item (summary, details) values (?, ?)";
    DB::insert($sql, array($summary, $details));
    $id = DB::getPdo()->lastInsertId();
    return($id);
}

function get_item($id){
    $sql = "select * from item where id=?";
    $items = DB::select($sql, array($id));
    
    if (count($items) != 1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    
    $item = $items[0];
    return $item;
}

function update_item($id, $summary, $details) {
    $sql = "update item set summary = ?, details = ? where id = ?"; 
    DB::update($sql, array($summary, $details, $id));
}

function delete_item($id) {
    $sql = "delete from item where id = ?"; 
    $id = DB::delete($sql, array($id));
    return $id;
}