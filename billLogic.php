<?php
require ('tools.php');

require ('Form.php');

useDWATools;
$form = new DWAForm($_POST);

if ($form->isSubmitted())
	{

	// # Validate!
	$errors = $form->validate(['price' => 'required|numeric', 'split' => 'required|numeric']);
	if (!$errors)
		{
		$split = $_POST['split'];
		$price = $_POST['price'];
		$total = $price / $split; // # Divide total price
		$rounded = round($total); // # Round total price
		if (isset($_POST['roundBill']))
			{
			$results = "Each person owes $" . $rounded;
			}
		  else
			{
			$results = "Each person owes $" . $total;
			}
		}
	  else
		{
		$results = '';
		}
	}
  else
	{
	$results = '';
	}
