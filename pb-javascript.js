const icons = document.querySelectorAll('.icon');
const togglers = document.querySelectorAll('.navbar-toggler');
togglers.forEach (toggler => {
  toggler.addEventListener('click', (event) => {
    icons.forEach (icon => {
        icon.classList.toggle("open");
        console.log("test");
    })

  });
});
