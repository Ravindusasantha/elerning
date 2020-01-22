<?php 

	session_start();

	include_once "header.php"

 ?>

<div class="container">
 <div class="row" style="margin-top: 50px;">
 	<form action="anscheck.php" method="POST">
 		<?php for($i=1;$i<10;$i++) {

 		 echo "<div>
 		 <label>".$i."</label>
 		 <input type='hidden' name='r$i' value='0' check='checked'>";
 		 for($j=1;$j<5;$j++){
 		
 		 echo "<input type='radio' name='r$i' value='$i$j'>";
 		 }
 		echo "</div>";
 		 } ?>
 		<input type="submit" value="Submit">
 	</form>



 </div>
</div>



 <?php include_once "footer.php" ?>