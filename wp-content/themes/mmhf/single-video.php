<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MMH_Forensics
 */
 get_header();
?>
<?php
$category = get_the_category();
$primary_category = get_primary_category($category);
?>
<main id="primary" class="site-main container-fluid px-0">
  <section class="vh-100 cpt-video-section bg-dark d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div class="w-100 ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/wNcwiMcbiWg" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-4">
          <h1 class="color-light underline-primary"><?php the_title();?></h1>
          <div class="d-flex justify-content-between">
            <?php if($primary_category): ?>
            <div class="video-category">
              <p class="lead fw-bold">
                Category
              </p>
              <p class="muted">
                <?php printf($primary_category); ?>
              </p>
            </div>
            <?php endif; ?>
            <div>
              <p class="lead fw-bold">
                Publish On
              </p>
              <p class="muted">
                <?php echo get_the_date(); ?>
              </p>
            </div>
            <div>
              <p class="lead fw-bold">
                Last Updated
              </p>
              <p class="muted">
                <?php the_modified_date(); ?>
              </p>
            </div>
          </div>
          <div class="video-tags">
            <h5>Post Tags</h5>
            <?php
              $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                  echo $tag->name . ' ';
                }
              }
              ?>
          </div>

          <p class="lead">
            <?php the_excerpt();?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid my-0">
    <div class="container px-5">
      <div class="row">
        <div class="col-6 text-left">
          <?php previous_post_link( '<------- <strong>%link</strong>' ); ?>
        </div>
        <div class="col-6 text-right">
          <?php next_post_link( '<strong>%link</strong> ------->' ); ?>
        </div>
      </div>
    </div>

  </section>
  <?php if('' !== get_post()->post_content):?>
  <section class="bg-light container-fluid py-4 my-0">
    <div class="container my-5">
      <div class="row px-5">
        <div class="col-8 offset-2">
          <h1><?php the_title(); ?> </h1>
          <?php  the_content();  ?>
        </div>

      </div>
    </div>

  </section>
  <?php endif; ?>
  <?php if(comments_open() === true): ?>
  <section class="bg-primary container-fluid py-4 my-0">
    <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <h2>Comments</h2>
         <?php comments_template(); ?>
        </div>


      </div>

    </div>

  </section>
<?php endif; ?>
</main>

<?php

get_footer();
