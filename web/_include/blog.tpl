<?php foreach ( GetContent("blog", "")['contents'] as  $blog_item ) { ?>
  <div class="card">
    <img src="<?php echo $blog_item['eyecatch']['url']; ?>" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title"><?php echo $blog_item['title']; ?></h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="/blog/index.php?id=<?php echo $blog_item['id']; ?>" class="btn btn-primary">記事を読む</a>
    </div>
  </div>
<?php } ?>