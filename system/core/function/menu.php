<?php


 function add_category($name){
    $query = "INSERT INTO kategori (nama_kategori) VALUES('$name')";
    return run($query);
 }

 function getcategory(){
   $query = "SELECT * FROM kategori ORDER BY nama_kategori ASC";
   return run($query);
 }

 function percategory($id){
   $query = "SELECT * FROM kategori WHERE id_kategori = '$id'";
   return run($query);
 }

 function edit_category($name,$id){
   $query = "UPDATE kategori SET nama_kategori='$name' WHERE id_kategori=$id";
   return run($query);
 }

 function delete_category($id){
   $query = "DELETE FROM kategori WHERE id_kategori = $id";
   return run($query);
 }

//bagian menu

function add_menu($name,$description,$kategori,$price,$target_file){
   $query = "INSERT INTO menu (nama_menu,des_menu,harga,id_kategori,img) VALUES('$name','$description','$price',$kategori,'$target_file')";

   return run($query);
}

function getmenu(){
  $query = "SELECT * FROM menu";
  return run($query);
}

function permenu($id){
  $query = "SELECT * FROM menu WHERE id_menu = '$id'";
  return run($query);
}

function edit_menu($name,$id){
  $query = "UPDATE menu SET nama_menu='$name' WHERE id_menu=$id";
  return run($query);
}

function delete_menu($id){
  $query = "DELETE FROM menu WHERE id_menu = $id";
  return run($query);
}
