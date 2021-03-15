<?php 
$pic_url = get_the_post_thumbnail_url(); 
$pic_id = get_post_thumbnail_id();
$pic_alt = get_post_meta($pic_id, '_wp_attachment_image_alt', true);
$pic_title = get_the_title($pic_id);
?>
<article class="post-block" itemscope itemtype="https://schema.org/Article">
  <a href="<?php echo esc_url(get_permalink()); ?>">
    <div class="img-35-wrapper">
    <?php $placeholder = get_image_asset('placeholder_dark.jpg'); ?>
      <?php $placeholder_dark = get_image_asset('placeholder_bright.jpg'); ?>
      <div
        class="img-35"
        itemprop="image"
        style="background-image: url(<?php echo $pic_url; ?>), url(<?php echo $placeholder; ?>);">
        <span role="img" aria-label="<?php echo $pic_alt; ?>"> </span>
      </div>
    </div>
  </a>

  <div class="post-title-small">
    <div class="img-35-wrapper">
      <a itemprop="url" href="<?php echo esc_url(get_permalink()); ?>">
        <span itemprop="headline"><?php the_title(); ?></span>
      </a>
    </div>
  </div>

  <div class="post-author post-date font-size-18">
    <span itemprop="author" hidden aria-hidden><?php the_author(); ?></span>
    <?php
    if (function_exists('coauthors_posts_links')) {
      coauthors_posts_links(', ', ', ', null, null, true);
    } else {
      the_author_posts_link();
    }
    if (get_the_date()) { echo ' | <time itemprop="datePublished">' . get_the_date() . '</time>'; }
    ?>
  </div>
</article>
