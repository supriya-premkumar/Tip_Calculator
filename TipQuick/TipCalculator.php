<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> TipQuick </title>
    <style>
    @import "http://fonts.googleapis.com/css?family=Droid+Serif";
    /* Above line is used for online google font */
    div.container {
    width:960px;
    height:610px;
    margin:50px auto;
    font-family:'Droid Serif',serif
    }
    div.main {
    width:308px;
    float:left;
    border-radius:5px;
    border:2px solid #990;
    padding:0 50px 20px
    }

    h1{
      color: #b92b27;
      width:960px;
      margin:50px auto;
      font-family:'Droid Serif',serif
      /*text-align:center;*/
    }
    td{
      color: #2316E6;
    }
    </style>
  </head>
  <body>
      <h1>Welcome to TipQuick!</h1>
      <div class="container">
      <div class="main">
    <form  name="form" action="" method="post">
       <table border="0">
         <tr>
           <td>Bill SubTotal: $ </td>
           <td><input type="text" name="bill"></td>
         </tr><tr>
           <td>Tip Percentage:</td>
         </tr><tr>
           <td><input type="radio" name="percent" value="10">10%</td>
           <td><input type="radio" name="percent" value="15">15%</td>
           <td><input type="radio" name="percent" value="20">20%</td>
         </tr><tr>
           <td><input type="radio" name="percent" value="1">custom:</td>
           <td><input type ="text" name="custom">%</td>
         </tr><tr>
         </tr><tr>
         </tr><tr>
           <td>split:</td>
           <td><input type ="text" name = "split"> person(s)</td>
         </tr><tr>
         </tr><tr>
         </tr><tr>
           <td></td>
           <td><input type="submit" name="formSubmit" value="calculate"></td>
</tr>
</table>
</form>
</div>
</div>





<?php
//Checks if all the required data has been acquired
if(isset($_POST['bill'], $_POST['percent'], $_POST['split'])){
	//Checks if the data is numeric as it should be
	// if(is_numeric($_POST['bill']) && is_numeric($_POST['custom']) && is_numeric($_POST['split']) ){
		echo "Bill: ".$_POST['bill'];

    if (isset($_POST['percent']) && (isset($_POST['custom']))) {
       if($_POST['custom']<0) // Making sure that percentage doesnt go into negatives
  		 	$_POST['custom'] = 0; //If it does, set it to 0
  		 echo "<br/>Tip %: ".$_POST['custom'];
  		 if($_POST['split']<1) //Just making sure this number isnt less than 1
  		 	$_POST['split'] = 1; //If it is, set it to 1 which is the default
  		 echo "<br/>People: ".$_POST['split'];
  		 echo "<br/>Tip amount: ".$tip = number_format($_POST['bill'] * $_POST['custom'] / 100, 2);
  		 echo "<br/>Total: ".$total = $tip+$_POST['bill'];
  		 echo "<br/>Total per Person: ".$total/$_POST['split'];
    } else {
    }
    if(isset($_POST['percent'])){
      //  if($_POST['percent']<0) // Making sure that percentage doesnt go into negatives
      //  $_POST['custom'] = 0; //If it does, set it to 0
       echo "<br/>Tip %: ".$_POST['percent'];
       if($_POST['split']<1) //Just making sure this number isnt less than 1
       $_POST['split'] = 1; //If it is, set it to 1 which is the default
       echo "<br/>People: ".$_POST['split'];
       echo "<br/>Tip amount: ".$tip = number_format($_POST['bill'] * $_POST['percent'] / 100, 2);
       echo "<br/>Total: ".$total = $tip+$_POST['bill'];
       echo "<br/>Total per Person: ".$total/$_POST['split'];
    }

		// if($_POST['custom']<0) // Making sure that percentage doesnt go into negatives
		// 	$_POST['custom'] = 0; //If it does, set it to 0
		// echo "<br/>Tip %: ".$_POST['custom'];
		// if($_POST['split']<1) //Just making sure this number isnt less than 1
		// 	$_POST['split'] = 1; //If it is, set it to 1 which is the default
		// echo "<br/>People: ".$_POST['split'];
		// echo "<br/>Tip amount: ".$tip = number_format($_POST['bill'] * $_POST['custom'] / 100, 2);
		// echo "<br/>Total: ".$total = $tip+$_POST['bill'];
		// echo "<br/>Total per Person: ".$total/$_POST['split'];
	// }else echo "At least one of the values was not a number!";
}else echo "Please fill all the values";
?>
</body>
</div>
</html>
