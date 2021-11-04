import React from 'react'
function Footer(){


    const d = new Date();
    return(
        <footer>
            <div className="container h-100">
                <div className="row h-100">
                    <div className="col-8 offset-2 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                        <small>Copyright © {d.getFullYear()} <br/>THE CENTRE FOR PERINATAL PSYCHOLOGY
            AND FORENSICS INTER­NATIONAL,<br /> All Rights Reserved.</small>
                        <p className="small">
                            <small>Website designed by <a href="https://pixelbakery.com" target="_blank">Pixel Bakery</a>.</small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    )
}
export default Footer



