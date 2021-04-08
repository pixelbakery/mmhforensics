<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MMH_Forensics
 */
$post_subtitle = get_field('subtitle');
$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
// TODO: ACF Integration for featured image aspecgt ratio
$featured_ratio = "16x9";
?>


<article id="post-<?php the_ID(); ?>" class="container-fluid post-wrapper mx-0 px-0" >
	<header class="entry-header container-fluid">
		<div class="mx-auto container post-header-content py-3 d-flex flex-column align-items-center">
			<?php
			the_title( '<h1 class="display-2 entry-title mt-3 pt-3 px-3 mb-1 text-center">', '</h1>' );
			if($post_subtitle){
				echo '<h3 class="post-subtitle mt-1 pt-0 mb-2">' . $post_subtitle . '</h3>';
			}
			?>


		<!-- TODO: Add ACF Integration for Category phrasing  -->
			<p class="post-postdate mt-3"><?php echo check_category();?> Written on <time> <?php echo get_the_date();?></time> <?php echo last_updated(); ?> </p>

			<?php
			be_display_image_and_caption($featured_ratio);
			?>

			<?php
				$posttags = get_the_tags();
				if ($posttags): ?>
				<div class="post-tags-wrapper d-flex justify-content-center">
					<span class="h5 d-inline-block tt-uppercase align-bottom">Post Tags</span>
					<?php foreach($posttags as $tag): ?>
						<span class="badge post-tag"> <?php echo $tag->name . ' '; ?> </span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
</div>
		<?php
		// if ( is_singular() ) :
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="container-fluid entry-content d-flex justify-content-center bg-offWhite pt-3 pb-5 mx-0">
		<div class="container post-content-container color-dark w-100  my-5">
			<?php the_content(); ?>

		</div>


	</div><!-- .entry-content -->


</article>
