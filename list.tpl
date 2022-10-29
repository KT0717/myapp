<?php foreach ( $posts as  $content_item ) { ?>
  <?php $t = new DateTime($content_item->date); ?>
  <?php $t->setTimezone(new DateTimeZone('Asia/Tokyo')); ?>
  <dt>
    <time><?php echo $t->format('y/m/d'); ?></time>
    <span class="info"><?php echo $content_item->title; ?></span>
  </dt>
<?php } ?>