<?php


session_start();
if (!isset($_SESSION)) {
	unset($_SESSION);
	header("Location:index.php");
}else{
session_destroy();
?>
<script type="text/javascript">
	alert('Impossivel destruir a SESSION');
</script>
	<?php
	header("Location:index.php");
}