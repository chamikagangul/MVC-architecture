<?php

function dnd($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}

function dnc($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function sanitize($dirty){
  return htmlentities($dirty,ENT_QUOTES,'UTF-8');
}

function currentUser(){
  return Users::currentLogedInUser();
}

function posted_values($post){
  $array =[];
  foreach($post as $key=>$value){
    $array[$key] = sanitize($value); 
  }
  return $array;
}
