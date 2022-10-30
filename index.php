<?php require_once('./api.php'); ?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title><?php echo $host; ?></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col mt-3">
        <h2 class="fs-5 fw-bold mb-1 pb-1 border-bottom">お知らせ</h2>
        <dl class="mt-3">
        <?php require_once('./list.tpl'); ?>
        </dl>
      </div>
    </div>
  </div>
</body>
</html>