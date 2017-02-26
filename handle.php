<?php
if (is_ajax()) {
  if (isset($_POST["value"]) && !empty($_POST["value"])) { //Checks if action value exists
    echo "received";
    $value = $_POST["value"];
    test_function();
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
  $return = $_POST;

  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";

  // $return = json_encode($return);
  echo "Success";
}
?>