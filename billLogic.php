<?php

require('tools.php');
require('Form.php');

use DWA\Tools;

$form = new DWA\Form($_GET);


if($form->isSubmitted()) {
$split = $_POST['split'];
$price = $_POST['price'];
$total = $price / $split;
$rounded = round($total);

## Validate!
$errors = $form->validate(
  [
  'price' => 'required|numeric',
]
);


  if(isset($_POST['roundBill'])) {
   $results = "The total bill is $".$rounded;
  }
  else {
    $results = "The total bill is $" .$total;
  }
} else {
  $results = '';
}
