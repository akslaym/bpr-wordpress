<?php get_header(); $page_id = get_option('page_on_front'); ?>

<div id="front-page" class="container-fluid">
  <section id="popular-articles">
    <h2 class="section-title header-font">Popular Articles</h2>
    <div class="carousel-wrapper row">
      <div class="carousel">
        <?php while (have_rows('featured_posts', $page_id)): the_row(); ?>
          <?php
          $post = get_sub_field('featured_post');
          $id = $post->ID;
          $pic_url = get_the_post_thumbnail_url($post);
          ?>
          <article class="container-fluid featured-post">
            <div class="row">
              <div class="col-sm-6">
                <a href="<?php echo esc_url(get_permalink($id)); ?>">
                  <div
                    class="img-40"
                    style="background-image: url(<?php echo $pic_url; ?>);">
                  </div>
                </a>
              </div>
  
              <div class="col-sm-6">
                <div class="d-none"><?php the_category(null, null, $id); ?></div>
  
                <div class="post-title-large">
                  <a href="<?php echo esc_url(get_permalink($id)); ?>">
                    <?php echo get_the_title($id); ?>
                  </a>
                </div>
  
                <p class="font-size-24">
                  <?php
                  $content = apply_filters('the_content', get_post_field('post_content', $id));
                  echo substr(sanitize_text_field($content), 0, 250) . '...';
                  ?>
                </p>
  
                <div class="post-author post-date font-size-20">
                  <?php $author_id = $post->post_author; ?>
                  <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
                    <?php echo get_the_author_meta('display_name', $author_id); ?>
                  </a>
                  <?php
                  if (get_the_date('', $id)) { echo ' | <time>' . get_the_date('', $id) . '</time>'; }
                  ?>
                </div>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div
        class="carousel-arrow carousel-prev"
        style="background-image: url(<?php echo get_image_asset('carousel-left.png'); ?>);">
      </div>
      <div
        class="carousel-arrow carousel-next"
        style="background-image: url(<?php echo get_image_asset('carousel-right.png'); ?>);">
      </div>
    </div>
    <script>
      $('.carousel').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 10000,
        arrows: true,
        prevArrow: $('.carousel-prev'),
        nextArrow: $('.carousel-next')
      });
    </script>
  </section>

  <section id="section-1" class="category-row">
    <?php
    $slug = get_field('section_1', $page_id)[0]->slug;
    $category_object = get_category_by_slug($slug);
    ?>

    <div class="horizontal-rule"></div>

    <h2 class="section-title header-font">
      <?php echo $category_object->name; ?>
    </h2>

    <div class="row">
      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 3,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/row-block');
      }
      ?>
    </div>

    <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
      More from  <?php echo $category_object->name; ?> >
    </a>
  </section>

  <section id="section-2" class="category-row">
    <?php
    $slug = get_field('section_2', $page_id)[0]->slug;
    $category_object = get_category_by_slug($slug);
    ?>

    <div class="horizontal-rule"></div>

    <h2 class="section-title header-font">
      <?php echo $category_object->name; ?>
    </h2>

    <div class="row">
      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 3,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/row-block');
      }
      ?>
    </div>

    <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
      More from  <?php echo $category_object->name; ?> >
    </a>
  </section>

  <div class="row category-cols">
    <section id="section-3" class="col-sm-6 category-col">
      <?php
      $slug = get_field('section_3', $page_id)[0]->slug;
      $category_object = get_category_by_slug($slug);
      ?>

      <div class="horizontal-rule"></div>

      <h2 class="section-title header-font">
        <?php echo $category_object->name; ?>
      </h2>

      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 3,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/col-block');
      }
      ?>

      <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
        More from  <?php echo $category_object->name; ?> >
      </a>
    </section>
    <section id="section-4" class="col-sm-6 category-col">
      <?php
      $slug = get_field('section_4', $page_id)[0]->slug;
      $category_object = get_category_by_slug($slug);
      ?>

      <div class="horizontal-rule"></div>

      <h2 class="section-title header-font">
        <?php echo $category_object->name; ?>
      </h2>

      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 3,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/col-block');
      }
      ?>

      <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
        More from  <?php echo $category_object->name; ?> >
      </a>
    </section>
  </div>

  <div class="row category-cols">
    <section id="section-5" class="col-sm-6 category-col">
      <?php
      $slug = get_field('section_5', $page_id)[0]->slug;
      $category_object = get_category_by_slug($slug);
      ?>

      <div class="horizontal-rule"></div>

      <h2 class="section-title header-font">
        <?php echo $category_object->name; ?>
      </h2>

      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 3,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/col-block');
      }
      ?>

      <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
        More from  <?php echo $category_object->name; ?> >
      </a>
    </section>
    <section id="section-6" class="col-sm-6 category-col-compact">
      <?php
      $slug = get_field('section_6', $page_id)[0]->slug;
      $category_object = get_category_by_slug($slug);
      ?>

      <div class="horizontal-rule"></div>

      <h2 class="section-title header-font">
        <?php echo $category_object->name; ?>
      </h2>

      <?php 
      $recent  = new WP_Query(array(
        'category_name' => $category_object->slug,
        'posts_per_page' => 6,
      ));

      while ($recent->have_posts()) {
        $recent->the_post();
        do_action('theme/single/col-block-small');
      }
      ?>

      <a class="more-link" href="<?php echo esc_url(get_category_link($category_object)); ?>">
        More from  <?php echo $category_object->name; ?> >
      </a>
    </section>
  </div>

  <section class="row bpradio-row"></section>
  <section class="row magazine-row"></section>
</div>

<?php get_footer(); ?>
