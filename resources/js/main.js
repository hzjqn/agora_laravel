
window.addEventListener('DOMContentLoaded', (e) => {
    // Navbar article lenght/progress indicator
    const articleProgressIndicator = document.getElementById('navbarArticleProgressIndicator');
    articleProgressIndicator.addEventListener('scroll', () => {
        this.boderColor = '#333';
        console.log(this);
    });

    // Navbar not on top styles
    const navbar = document.getElementsByClassName('navbar-agora')[0];
    window.addEventListener('scroll', function() {
        changeNavbar();
    });

    function changeNavbar(){           
        if(window.scrollY > 10){
            navbar.classList.add('not');
        }else{
            navbar.classList.remove('not');
        }
    }

});