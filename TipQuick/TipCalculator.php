<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> TipQuick </title>
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
    <div class="container">
      <style>
      @import "http://fonts.googleapis.com/css?family=Droid+Serif";
      /* Above line is used for online google font */
      div.container {
      width:500px;
      height:250px;
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
    <h1>Welcome to TipQuick!</h1>
  </head>
  <body>
    <div class="container">
    <div class="main">
    <form  name="form" action="" method="post">
       <table border="0">
         <tr>
           <td>Bill SubTotal: $ </td>
           <td><input type="text" name="bill" value = "<?php echo isset($_POST['bill']) ? $_POST['bill'] : '' ?>"></td>
         </tr><tr>
           <td>Tip Percentage:</td>
         </tr><tr>
           <?php
           $percent = array(10,15,20);
           foreach ($percent as $value) {
             $output ='<p class="radio">';
                       $output .= '<input type="radio" class="spacing" name="percent" ';
                          if(isset($_POST[$value])
                              $output .='checked="Checked"';
                          else
                              $output .='';

                              $output .='name="'.$name.'" value="'.$value.'">'.$value;
                      }
                      $output .='</p>';
                      echo $output;
           }



            //
            //  <td width="94px" height="41px"><input type="radio" name="percent" value="10" >10%</td>
            //  <!-- <?php if (isset($_POST[ 'percent']) && $_POST[ 'percent']=='10' ){echo ' checked="checked"';}?> -->
            //  <td width="94px" height="41px"><input type="radio" name="percent" value="15" >15%</td>
            //  <!-- <?php if (isset($_POST[ 'percent']) && $_POST[ 'percent']=='15' ){echo ' checked="checked"';}?> -->
            //  <td width="94px" height="41px"><input type="radio" name="percent" value="20" >20%</td>
            //  <!-- <?php if (isset($_POST[ 'percent']) && $_POST[ 'percent']=='20' ){echo ' checked="checked"';}?> -->
            // </tr><tr>
             <td width="94px" height="41px"><input type="radio" name="customPercent" value="1" >Custom Tip Percent: </td>
             <!-- <?php if (isset($_POST[ 'customPercent']) && $_POST[ 'customPercent']=='1' ){echo ' checked="checked"';}?> -->
             <td><input type ="text" name="custom" value = "<?php echo isset($_POST['custom']) ? $_POST['custom'] : '' ?>"></td>           }

           ?>



         </tr><tr>
         </tr><tr>
         </tr><tr>
           <td>split:</td>
           <td><input type ="text" name = "split" value = "<?php echo isset($_POST['split']) ? $_POST['split'] : '' ?>"> person(s) </td>
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

if(isset($_POST['bill'], $_POST['split'], $_POST['percent'])){
  if(is_numeric($_POST['bill']) || is_numeric($_POST['split'])){
    if($_POST['split']<1){
      $_POST['split'] = 1; //If it is, set it to 1 which is the default
      echo '<span style = "color: #b92b27; text-align:; "> Please Enter Number greater than zero. By default split = 1</span><br>';
    } //Just making sure this number isnt less than 1


    echo "Bill: $".$_POST['bill'];
    if($_POST['percent']<0) // Making sure that percentage doesnt go into negatives
    $_POST['percent'] = 0; //If it does, set it to 0
    if($_POST['custom']<0) // Making sure that percentage doesnt go into negatives
    $_POST['custom'] = 0; //If it does, set it to 0
    echo "<br/>Tip %: $".$_POST['percent'];
    echo "<br/>People: $".$_POST['split'];
    echo "<br/>Tip amount: $".$tip = number_format($_POST['bill'] * $_POST['percent'] / 100, 2);
    echo "<br/>Total: $".$total = $tip+$_POST['bill'];
    echo "<br/>Total per Person: $".$total/$_POST['split'];
  }

}//else{
//   echo '<span style = "color: #b92b27; text-align:; "> Please Enter a Valid Number</span>';
// }

if(isset($_POST['bill'], $_POST['split'], $_POST['customPercent'], $_POST['custom'])){
  if(is_numeric($_POST['bill']) || is_numeric($_POST['split'])){
    if($_POST['split']<1) //Just making sure this number isnt less than 1
    $_POST['split'] = 1; //If it is, set it to 1 which is the default
     echo "Bill: $".$_POST['bill'];
     if(isset($_POST['customPercent']) && isset($_POST['custom'])){
     if($_POST['custom']<0){
       // Making sure that percentage doesnt go into negatives
       echo '<span style = "color: #b92b27; text-align:; "> Please Enter Number greater than zero. By default custom Tip = 0</span><br>';
       $_POST['custom'] = 0; //If it does, set it to 0
     }

     echo "<br/>Tip %: $".$_POST['custom'];

     echo "<br/>People: $".$_POST['split'];
     echo "<br/>Tip amount: $".$tip = number_format($_POST['bill'] * $_POST['custom'] / 100, 2);
     echo "<br/>Total: $".$total = $tip+$_POST['bill'];
     echo "<br/>Total per Person: $".$total/$_POST['split'];
     }else{
     echo "Please enter Custom Tip Value";
     }
}
}

?>
</body>
</div>
</html>
