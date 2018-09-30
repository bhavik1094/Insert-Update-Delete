<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$id;$nm;$pass;    
if(isset($_REQUEST['slt']))
{ 
    $id=$_REQUEST['slt'];
     $con=  mysqli_connect('localhost','root','');
                mysqli_select_db($con,"demo");
                $res=  mysqli_query($con,"select * from student where id=$id");
                while ($row = mysqli_fetch_array($res))
                {
                    $nm=$row['name'];
                    $pass=$row['pass'];
                }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" name="form1"  id="form1">
            Enter Id:-<input type="text" name="txtid" id="txtid" value="<?php echo $id?>"/>
            <select name="slt" onchange="document.getElementById('form1').submit()">
                <option>--select--</option>
             <?php
             
                $con=  mysqli_connect('localhost','root','');
                mysqli_select_db($con,"cht");
                $res=  mysqli_query($con,"select * from student");
                while ($row = mysqli_fetch_array($res))
                {
                    echo "<option>".$row['id']."</option>";                      
                }
                ?></select><br>
            Enter Name:-<input type="text" name="txtname" id="txtname" value="<?php echo $nm?>" /><br>
      Enter Password:-<input type="password" name="txtpass" id="txtpass" value="<?php echo $pass?>"/><br>
      <input type="hidden" id="txthidden" name="txthidden"/>
      <input type="submit" id="btnsubmit" name="btnsubmit" value="insert" onclick="document.getElementById('txthidden').value='insert'"/>
      <input type="submit" id="btnupdate" name="btnupdate" value="update" onclick="document.getElementById('txthidden').value='update'"/>
      <input type="submit" id="btndelete" name="btndelete" value="delete" onclick="document.getElementById('txthidden').value='delete'"/>
        </form>
    </body>
</html>
