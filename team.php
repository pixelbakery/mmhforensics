<?php
include_once('./inc/functions.php');
$title = "TEAM";
$page = chopExtension(basename(__FILE__));
include_once('./inc/header.php');
include_once('./inc/nav.php'); ?>
<div class="container my-5 py-5 h-100 d-flex flex-column justify-content-center " >
  <div class="row px-5 ">
    <div class="col-12 col-lg-8 col-xl-5  border border-1 border-white rounded-3 p-5">
      <h1 class="display-1 mb-3">Coming Soon.</h1>
      <p>
        If you are interested in being part of the CPPFI Team, please enter your email and we'll contact you once we have launched.
      </p>
        <form action="https://mmhforensics.us2.list-manage.com/subscribe/post?u=b16066874c0f21ab6870bd449&amp;id=07edc92c65" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">


          <div class="row ">
            <div class="col-12 col-md-6 form-floating mb-4">
              <input type="text" class="form-control teamform" id="mce-FNAME" name="FNAME" placeholder="First name" aria-label="First name">
              <label class="ps-3 ms-2" for="mce-FNAME">First Name</label>

            </div>
            <div class="col-12 col-md-6 form-floating mb-4">
              <input type="text" class="form-control teamform" id="mce-LNAME" name="LNAME" placeholder="Last name" aria-label="Last name">
              <label class="ps-3 ms-2" for="mce-LNAME">Last Name</label>

            </div>
          </div>
          <div class="form-floating mb-4">
            <input type="email" class="form-control teamform" name="EMAIL" id="mce-EMAIL" placeholder="name@example.com" aria-label="Email Address">
            <label for="mce-EMAIL">Email address</label>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

             <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b16066874c0f21ab6870bd449_07edc92c65" tabindex="-1" value=""></div>
             <div class="clear row">
               <div class="col-12 col-md-5">
                   <input type="submit" value="Add Request" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary mb-3 w-100">
               </div>
             </div>
               </div>
               <div id="mce-responses" class="clear">
             		<div class="response" id="mce-error-response" style="display:none"></div>
             		<div class="response" id="mce-success-response" style="display:none"></div>
             	</div>
        </form>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    </div>

  </div>
</div>



<?php include_once('./inc/footer.php'); ?>








<!--End mc_embed_signup-->
