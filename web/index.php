<?php
require('../app/functions.php');
createToken();
define('FILENAME', '../app/messages.txt');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validateToken();
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';
  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);
  header('Location: ./result.php');
  exit;
}
$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);
include('../web/_parts/_header.php');
?>

<!-- html start -->
<div class="container mt-4 mb-4">
  <div class="row">
    <div class="col mt-3">
      <h2 class="fs-5 mb-1 pb-1 border-bottom">お知らせ</h2>
      <dl class="mt-3">
      <?php require_once('./_include/list.tpl'); ?>
      </dl>
    </div>
  </div>
  <div class="row">
    <div class="col mt-3">
      <h2 class="fs-5 mb-1 pb-1 border-bottom">ブログ</h2>
      <div class="mt-3">
        <div class="card-list">
          <?php require_once('./_include/blog.tpl'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col mt-3">
      <h2 class="fs-5 mb-1 pb-1 border-bottom">掲示板</h2>
      <div class="mt-3">
        <ul>
        <?php foreach ($messages as $message): ?>
          <li><?= h($message); ?></li>
        <?php endforeach; ?>
        </ul>

        <form action="" method="post">
          <input type="text" name="message">
          <button>Post</button>
          <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- html end -->

<?php
include('../web/_parts/_footer.php');