<?php foreach ( GetContent("news", "")['contents'] as  $content_item ) { ?>
  <?php $t = new DateTime($content_item['date']); ?>
  <?php $t->setTimezone(new DateTimeZone('Asia/Tokyo')); ?>
  <dt>
    <i class="bi bi-calendar"></i>
    <time><?php echo $t->format('y/m/d'); ?></time>
    <?php if($newIconOn < $t): ?>
    <span class="icon-new">NEW</span>
    <?php endif; ?>
  </dt>
  <dd class="mt-1 pb-1 border-bottom">
    <?php echo $content_item['title']; ?>
  </dd>
<?php } ?>