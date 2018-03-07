<ul>
<?php
  include "header.php";

//If cmd has not been initialized
if(!isset($cmd))
{

   //display all the cars
   $result = mysql_query ('SELECT * FROM user order by user_id') or die ('sql 1 Error: '.mysql_error ());
  
   //run the while loop that grabs all the cars
   while($r=mysql_fetch_array($result))
   {
      //grab the model and the ID
      $id=$r["user_id"];//take out the model    
      $uname=$r["username"];//take out the model
      $email=$r["email"];//take out the id
$fname=$r["firstname"];//take out the id
 $lname=$r["lastname"];//take out the model    
      $mdate=$r["modified_date"];//take out the model
    
     //show the make and model a link in a list
      echo "<li>";
      echo "<a href='edit.php?cmd=edit&id=$id'>Edit - $uname $email $fname $lname $mdate </a>";
      echo "</li>";
    }
}
?>
   </ul>

<?php

if(isset($_POST['cmd']))
{
if($_GET["cmd"]=="edit" || $_POST["cmd"]=="edit")
{
   if (!isset($_POST["submit"]))
   {
      $id = $_GET["user_id"];
  
      $result = mysql_query("SELECT * FROM user WHERE user_id=$id") or die ('sql 2 Error: '.mysql_error ());       
      $myrow = mysql_fetch_array($result);
?>

      <form action="edit.php" method="post">
      <input type=hidden name="id" value="<?php echo $myrow["user_id"] ?>">
  
      uname:<input type="text" name="fname" value="<?php echo $myrow["username"]; ?>" size=30 /><br />
      email:<input type="text" name="lname" value="<?php echo $myrow["email"]; ?>" size=30 /><br />
      fname:<input type="text" NAME="phon" value="<?php echo $myrow["firstname"]; ?>" size=30 /><br />
      lname:<input type="text" name="fname" value="<?php echo $myrow["lastname"]; ?>" size=30 /><br />
      madte:<input type="text" name="lname" value="<?php echo $myrow["modified_date"]; ?>" size=30 /><br />
      
  
  
      <input type="hidden" name="cmd" value="edit" />
  
      <input type="submit" name="submit" value="submit" />
  
      </form>

     <?php }
    
   if ($_POST["$submit"])
   {
      $uname = $_POST["username"];
      $email = $_POST["email"];
      $fname = $_POST["firstname"];
	  $lname = $_POST["lastname"];
      $mdate = $_POST["mdate"];



      $sql = "UPDATE user SET username='$uname',email='$email',firstname='$fname',lastname='$lname',modified_date='$mdate' WHERE user_id=$id";

      $result = mysql_query($sql);
      echo "Thank you! Information updated.";
   }
}


}
?>

<?php
  
  include "footer.php";
  
?>