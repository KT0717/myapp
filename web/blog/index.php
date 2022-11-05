<?php
require('../../app/functions.php');
include('../../app/_parts/_header.php');
$id = $_GET['id'];
?>

<!-- html start -->
<div class="container">
  <div class="row">
    <div class="col mt-3">
      <img src="<?php echo GetContent("blog", $id)['eyecatch']['url']; ?>" class="" alt="">
      <h2 class="fs-5 mb-1 pb-1 border-bottom"><?php echo GetContent("blog", $id)['title'] ?></h2>
    </div>
  </div>
</div>
<!-- html end -->

<?php
include('../../app/_parts/_footer.php');