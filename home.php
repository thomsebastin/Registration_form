<?php
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
	echo "You are Welcome ". "<b>". $_SESSION['user']. "</b>";
	echo "<br>";
?>
<p>All the contents of the user 
	<?php echo "<b>". $_SESSION['user']. "</b>"; ?> including his <b>Property Documents</b> goes here.</p>
<a href = "logout.php">Logout</a>	
<?php	
}else{
	header("location:login.php");
}

?>