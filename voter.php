<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favorite political party? <BR>
<input type="radio" name="lan" value="Party A">  Party A<BR>
<input type="radio" name="lan" value="Party B">Party B<BR>
<input type="radio" name="lan" value="Party C">   Party C<BR>
<input type="radio" name="lan" value="Party D">  Party D<BR>
<input type="radio" name="lan" value="Party E">  Party E<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
