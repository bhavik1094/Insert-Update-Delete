<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="next.php">
            Enter Id:-<input type="text" name="txtid" id="txtid"/>
<!--            <select>
                <?php
                $con=  mysqli_connect('localhost','root','');
                mysqli_select_db($con,"cht");
                $res=  mysqli_query($con,"select * from student");
                while ($row = mysqli_fetch_array($res))
                {
                    echo "<option>".$row['id']."</option>";   
                   
                }
                 ?>
            </select>-->
        <br>
            Enter Name:-<input type="text" name="txtname" id="txtname"/><br>
      Enter Password:-<input type="password" name="txtpass" id="txtpass"/><br>
      <input type="hidden" id="txthidden" name="txthidden"/>
      <input type="submit" id="btnsubmit" name="btnsubmit" value="insert" onclick="document.getElementById('txthidden').value='insert'"/>
      <input type="submit" id="btnupdate" name="btnupdate" value="update" onclick="document.getElementById('txthidden').value='update'"/>
      <input type="submit" id="btndelete" name="btndelete" value="delete" onclick="document.getElementById('txthidden').value='delete'"/>
        </form>
    </body>
</html>
