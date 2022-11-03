<?php
require('/app/functions.php');
include('/app/_parts/_header.php');
?>
  <!-- html start -->
  <div class="container">
    <div class="row">
      <div class="col mt-3">
        <h2 class="fs-5 fw-bold mb-1 pb-1 border-bottom">お知らせ</h2>
        <dl class="mt-3">
        <?php require_once('./_include/list.tpl'); ?>
        </dl>
      </div>
    </div>
    <div class="row">
      <div class="col mt-3">
        <h2 class="fs-5 fw-bold mb-1 pb-1 border-bottom">ブログ</h2>
        <dl class="mt-3">
        <?php require_once('./_include/blog.tpl'); ?>
        </dl>
      </div>
    </div>
  </div>
  <!-- html end -->

<?php
include('../app/_parts/_footer.php');