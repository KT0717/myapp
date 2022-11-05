<?php
require('../../app/functions.php');
include('../../app/_parts/_header.php');
$id = $_GET['id'];
?>

<?php echo GetContent("blog", $id)['title'] ?>

<?php
include('../../app/_parts/_footer.php');