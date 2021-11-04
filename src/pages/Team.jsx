import React, {useEffect, useState} from 'react';
import Mailchimp from '../components/form';

function Team(){
    // useEffect(() => {
    //     (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
    // },[])

    return(
        <div className="container my-5 py-5 h-100 d-flex flex-column justify-content-center " >
          <div className="row px-5 ">
            <div className="col-12 col-lg-8 col-xl-5  border border-1 border-white rounded-3 p-5">
            <h1 className="display-1 mb-3">Coming Soon.</h1>
              <p>
                If you are interested in being part of the CPPFI Team, please enter your email and we'll contact you once we have launched.
              </p>
              <Mailchimp url={"https://mmhforensics.us2.list-manage.com/subscribe/post?u=b16066874c0f21ab6870bd449&amp;id=07edc92c65"}/>
             
            </div>
          </div>
        </div>
    )
}
export default Team






       