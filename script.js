
const navLink = document.querySelectorAll('.nav-link');
//select all navLinks with class .nav-link

function linkAction() {
    //function that loops all navLinks, removes is-active class when present and add is-active class again
    navLink.forEach(n => n.classList.remove('is-active'));
    this.classList.add('is-active');
    
}

//loops over all navLinks and on click of each one fires linkAction function
navLink.forEach(n => n.addEventListener('click', linkAction));