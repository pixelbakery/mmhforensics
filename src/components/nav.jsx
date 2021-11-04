import React, { useEffect} from "react";
import { NavLink, Link } from 'react-router-dom';
import NavbarJS from "../js/navbar";


export default function Nav(){
  useEffect(() => {
    NavbarJS();
},[])
  return(
    <header>
      <nav className="navbar navbar-expand-md ">
        <div className="container-fluid">
        <Link className="navbar-brand" to="#"></Link>
        <button className="navbar-toggler me-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <div className="icon nav-icon-5">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
          <div className="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarTogglerDemo01">
          <ul className="navbar-nav list-inline">
              <li  className=" list-inline-item px-1 nav-item ">
                <NavLink exact activeClassName="active" className="nav-link text-decoration-none pb-1 " to={"/"}> Home</NavLink> 
              </li>

              <li  className=" list-inline-item px-1 nav-item "> 
                <NavLink exact activeClassName="active" className="nav-link text-decoration-none pb-1 " to={"/team"}> Team</NavLink> 
              </li>

              <li  className=" list-inline-item px-1 nav-item "> 
                <NavLink exact  className="nav-link text-decoration-none pb-1 " to={"/manifesto"}> Manifesto</NavLink>
              </li>
              <li  className=" list-inline-item px-1 nav-item "> 
                <NavLink exact activeClassName="active" className="nav-link text-decoration-none pb-1 " to={"/mission"}> Mission</NavLink> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  );
}




