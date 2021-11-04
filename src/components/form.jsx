import React, { Component } from "react";
import { render } from "react-dom";
import MailchimpSubscribe from "react-mailchimp-subscribe";

const CustomForm = ({ status, message, onValidated }) => {
    let email, fname, lname;
  
    const submit = (e) => {
      email &&
      fname &&
      lname &&
      email.value.indexOf("@") > -1 &&
      onValidated({
        EMAIL: email.value,
        FNAME: fname.value,
        LNAME: lname.value
      });
      e.preventDefault();
  
    }
  
    return (
        <div>
        <form onSubmit={submit}>
            <div id="mc_embed_signup_scroll">
                <div className="row ">
                    <div className="col-12 col-md-6 form-floating mb-4">
                        <input 
                            ref={node => (fname = node)}
                            type="text" 
                            className="form-control teamform" 
                            id="mce-FNAME" 
                            name="FNAME" 
                            placeholder="First name" 
                            aria-label="First name" 
                            value={status === "success" ? "" : undefined}
                        />
                        <label className="ps-3 ms-2" htmlFor="mce-FNAME">First Name</label>
                 </div>

                 <div className="col-12 col-md-6 form-floating mb-4">
                    <input 
                        ref={node => (lname = node)}
                        type="text" 
                        className="form-control teamform" 
                        id="mce-LNAME" name="LNAME" 
                        placeholder="Last name" 
                        aria-label="Last name" 
                        value={status === "success" ? "" : undefined}
                    />
                    <label className="ps-3 ms-2" htmlFor="mce-LNAME">Last Name</label>
                </div>
                </div>
                <div className="form-floating mb-4">
                    <input 
                        ref={node => (email = node)}
                        type="email" 
                        className="form-control teamform" 
                        name="EMAIL" 
                        id="mce-EMAIL" 
                        placeholder="name@example.com" 
                        aria-label="Email Address" 
                        
                    />
                    <label htmlFor="mce-EMAIL">Email address</label>
                </div>
                <div className="clear row">
                    <div className="col-12 col-md-5">
                        <input 
                            type="submit" 
                            value="Add Request" 
                            name="subscribe" 
                            id="mc-embedded-subscribe" 
                            className="btn btn-primary mb-3 w-100" 
                        />
                    </div>
                </div>
            </div>
        </form>
    

{/*         
            <div className="w-40">
            <input
              ref={node => (fname = node)}
              type="text"
              placeholder="First Name"
              className="form-control teamform rounded-md "
              value={status === "success" ? "" : undefined}
            />
            </div> */}
             
            {/* <div className="w-40">
            <input
              ref={node => (lname = node)}
              type="text"
              placeholder="Your first name"
              className="w-40 form-control teamform "
              value={status === "success" ? "" : undefined}
            />
            </div>
            </div> */}
            {/* <input
              ref={node => (email = node)}
              type="email"
              placeholder="Email"
              className="w-100 form-control  rounded-md"
              value={status === "success" ? "" : undefined}
            /> */}



  
        {status === "sending" && <div style={{ color: "blue" }}>sending...</div>}
        {status === "error" && (
          <div
            className="alert alert-danger mb-0 mt-3 small"
            role="alert"
            dangerouslySetInnerHTML={{ __html: message }}
          />
        )}
        {status === "success" && ( 
          <div
            className="alert alert-success mb-0 mt-3 small"
            role="alert"
            dangerouslySetInnerHTML={{ __html: message }}
          />
  
        )}
    </div>
    );
  };
  
  const subscribeMailchimp = () => {
      const url = "https://mmhforensics.us2.list-manage.com/subscribe/post?u=b16066874c0f21ab6870bd449&amp;id=07edc92c65    ";
    return (
      <MailchimpSubscribe
        url={url}
        render={({ subscribe, status, message }) => (
          <CustomForm
            status={status}
            message={message}
            onValidated={formData => subscribe(formData)}
          />
        )}
      />
    );
  };
  
  export default subscribeMailchimp;
  