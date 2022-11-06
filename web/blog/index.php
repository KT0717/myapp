<?php
require('../../app/functions.php');
include('../../app/_parts/_header.php');
$id = $_GET['id'];
?>

<!-- html start -->
<div class="container">
  <div class="row">
    <div class="col mt-3">
      <div class="blog">
        <img src="<?php echo GetContent("blog", $id)['eyecatch']['url']; ?>" class="w-50" alt="">
        <h2 class="fs-5 mb-1 pb-1 border-bottom mt-3"><?php echo GetContent("blog", $id)['title'] ?></h2>
        <p class="text mt-3"><?php echo GetContent("blog", $id)['text']; ?></p>
      </div>
    </div>
  </div>
  <div class="row">
    <a href="/">戻る</a>
  </div>
</div>
<!-- html end -->

<?php
include('../../app/_parts/_footer.php');