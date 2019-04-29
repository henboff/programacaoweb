<?php
    session_start();
?>

<html>
<table style="width:100%">
<tr>
  <th>Firstname</th>
  <th>Lastname</th> 
  <th>Age</th>
</tr>
<tr>
  <td>Jill<?php $_SESSION['seg1'] = "Jill"; ?></td>
  <td>Smith</td> 
  <td>50</td>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td> 
  <td>94</td>
</tr>
</table>

<a href = 'destino.php'>link</a>

</html>
