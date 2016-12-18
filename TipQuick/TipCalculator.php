<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> TipQuick </title>
    <style>
    h1{
      color: #b92b27;
      /*text-align:center;*/
    }
    td{
      color: #2316E6;
    }
    </style>
    <h1>Welcome to TipQuick!</h1>
  </head>
  <body>
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
           <td><input type="radio" name="percent" value="custom">custom:</td>
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
           <td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>
