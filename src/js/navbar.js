import React from "react";

export default function Navbar(){
  const icons = document.querySelectorAll('.icon');
  const togglers = document.querySelectorAll('.navbar-toggler');
  const navLinks = document.querySelectorAll('.nav-link');
  const navBar = document.getElementById("navbarTogglerDemo01");
  navLinks.forEach(navLink => {
    navLink.addEventListener('click', (event) => {
      navBar.classList.remove("show");
      icons.forEach (icon => {
        icon.classList.remove("open");
      
    })
    });
  });

  togglers.forEach (toggler => {
    toggler.addEventListener('click', (event) => {
      icons.forEach (icon => {
          icon.classList.toggle("open");
        
      })

    });
  });
}