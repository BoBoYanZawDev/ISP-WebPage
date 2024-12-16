let nav = document.getElementsByTagName('header')[0];
window.onscroll = () => {
   nav.classList.toggle("active",window.scrollY > 0);
}

const navLinks = document.querySelectorAll('.nav-link');
const PageURL = window.location.pathname;
const navDropdown = document.querySelectorAll('.nav-link.active > .dropdown-item');
navLinks.forEach(navLink => {
   const pathName = new URL(navLink.href).pathname;
   if (PageURL === pathName){
      navLink.classList.add("active");
   }
});

function foo(a,b=10,c) {
   console.log(foo.length);
}
foo(1,2,3);