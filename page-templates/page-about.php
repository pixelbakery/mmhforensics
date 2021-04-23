<?php
/**
* Template Name: About
* Template Post Type: page
*  @package MMH_Forensics
*
*/
get_header();
?>
<main id="primary" class="site-main">
  <article id="post-<?php the_ID(); ?>" class="container-fluid post-wrapper ">
    <header class="entry-header container-fluid page-header">
      <div class="container h-100 post-header-content py-3 d-flex flex-row align-items-center">
        <div class="row">
          <div class="col col-md-6 h-100 d-flex flex-column justify-content-center pe-4">
            <?php
      			the_title( '<h1 class="display-1 entry-title mt-3 pt-3 mb-1 text-left">', '</h1>' );
            $page_subtitle = get_field('subtitle');
            $page_subtitle_enable = get_field('enable_subtitle');
      			if($page_subtitle && $page_subtitle_enable):?>
              <h3 class="page-subtitle mt-1 pt-0 mb-2 text-capitalize"><?php echo $page_subtitle; ?></h3>'
      			<?php endif;
            $my_excerpt = get_the_excerpt();
      			?>

            <p class="lead my-3">
              <?php echo $my_excerpt; ?>
            </p>
          </div>
          <div class="col col-md-6 ps-4">
            <div class="page-header-image-wrapper p-4 text-center w-100">
              <img src="https://images.unsplash.com/photo-1528716321680-815a8cdb8cbe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=820&q=100" class="img-fluid" alt=""/>
            </div>
          </div>
        </div>

      </div>
    </header>
    <section class="container-fluid entry-content page-content bg-offWhite mb-0 pb-5 mx-0">
      <div class="container page-content-container color-dark my-5">
        <div class="row mx-xl-5">
          <div class="col col-md-6">
            <h2 class="display-1 fw-bolder mt-0 pt-0 underline-red">Our Mission</h2>
          </div>
          <div class="col col-md-6">
            <p class="lead">
              Endorsing and legitimizing the field of maternal mental health forensics by establishing chief foundations along with standards, benchmarks, protocols, and assessment strategies; continually updating information from evidence-based knowledge and research. We strive to enhance knowledge and resource exchange between countries and to work collaboratively with maternal/paternal mental health specialists, psychologists, psychiatrists, social workers, legal experts, and the community for the betterment of families, societies, and in generations to come.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- START 50-50 Split Image-Text Section -->
    <div class="container-fluid entry-content entry-content-split vh-100 bg-offWhite m-0 p-0 w-100">
      <div class="row m-0 p-0 w-100 h-100" >
        <div class="col-6 m-0 p-0" style="background-image: url('https://images.unsplash.com/photo-1608493830924-ec843d9c98c6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80');">

        </div>
        <div class="col-6 m-0 p-0 d-flex justify-content-center align-items-center bg-middle-grey  px-3 py-4">
          <div class="container my-3 mx-3">
            <div class="row">
              <div class="col-12">
                <h2 class="display-4 color-dark fw-bolder">Core Values</h2>
                <p class="lead color-dark">
                  Phosfluorescently reinvent installed base intellectual.
                </p>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card border-0 rounded-3 bg-offWhite px-3 h-100">
                  <div class="card-body px-2 py-4">
                    <h5 class="card-title color-dark mb-3 mt-1 display-3 upperline-red">01</h5>
                    <p class="card-text color-dark pt-1">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0 rounded-3 bg-offWhite px-3 h-100">
                  <div class="card-body px-2 py-4">
                    <h5 class="card-title color-dark mb-3 mt-1 display-3 upperline-red">02</h5>
                    <p class="card-text color-dark pt-1">This is a shorter card with limited content.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0 rounded-3 bg-offWhite px-3 h-100">
                  <div class="card-body px-2 py-4">
                    <h5 class="card-title color-dark mb-3 mt-1 display-3 upperline-red">03</h5>
                    <p class="card-text color-dark pt-1">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0 rounded-3 bg-offWhite px-3 h-100">
                  <div class="card-body px-2 py-4">
                    <h5 class="card-title color-dark mb-3 pt-0 mt-1 display-3 upperline-red">04</h5>
                    <p class="card-text color-dark pt-1">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>

            </div>




          </div>
        </div>
      </div>
    </div>
    <!-- END 50-50 Split Image-Text Section -->
    <section class="container-fluid entry-content bg-offWhite m-0 py-5">
      <div class="container page-content-container color-dark my-5">
        <div class="row mx-md-5 px-5">
          <div class="col-12">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </section>
  </article>
</main>
<?php
get_footer();
?>
