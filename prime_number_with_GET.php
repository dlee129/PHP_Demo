<?php

if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
    $i = 2;
    $isPrime = true;
    while($i < $_GET['number']){
      if($_GET['number'] % $i == 0){
        $isPrime = false;
      }
      $i++;
    }
    if($isPrime){
      echo "<p>".$i." is a prime number!</p>";
    } else {
      echo "<p>".$i." is not prime.</p>";
    }
} else if ($_GET){
  echo "<p>Please enter a positive integer.</p>";
}

 ?>

<p>Please enter an integer</p>

<form>
  <input type="text" name="number" >
<input type="submit" value="Go!">
</form>
