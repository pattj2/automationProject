<?php 
  $output = shell_exec(`git pull`);
	 echo "Application has been updated $output ";
?>
