<?php
require("header.php");

$manager = new FilmsManager();
$manager->delete($_GET["id"]);

?>



echo "<script>
    window.location.href = './index.php'
</script>";