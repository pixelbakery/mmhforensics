

<?php
include_once('./inc/functions.php');
$title = "HOME";
$page = chopExtension(basename(__FILE__));
include_once('./inc/header.php');
include_once('./inc/nav.php'); ?>


  <div class="container vh-100 my-0  " >
    <div class="graph-holder position-relative">
      <div  class="graph">
        <div id="3d-graph"></div>
      </div>
    </div>

    <div class="skrim d-block d-md-none"></div>
    <main class="container">
      <div class="row h-100  d-flex flex-column justify-content-around mx-1 px-1 px-md-5">
          <div class="title-holder d-inline-block pt-1">
              <h1 class=""><span>The Centre for</span></h1>
              <h1 class="display-1"><span>Perinatal</span></h1>
              <h1 class="display-1"><span>Psychology</span></h1>

              <h1><span>and</h1>
              <h1 class="display-1"><span>Forensics</span></h1>
                  <h1 class="display-1"><span class="underline">International</span></h1>
          </div>

          <div class="py-1">

            <h3 class="text-left">WEBSITE COMING SOON</h3>
            <p class="lead text "><a data-toggle="modal" data-target="#exampleModal">Enter your email</a> and we'll let you know when we launch.</p>
          </div>
      </div>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Enter Your Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                  /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">

                <form action="https://mmhforensics.us2.list-manage.com/subscribe/post?u=b16066874c0f21ab6870bd449&amp;id=07edc92c65" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">

                <div class="mc-field-group">
                  <label for="mce-EMAIL">Email Address </label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b16066874c0f21ab6870bd449_07edc92c65" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
              </div>

            </div>
          </div>
        </div>
    </main>

  </div>

<?php include_once('./inc/footer.php'); ?>
