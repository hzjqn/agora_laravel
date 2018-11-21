
window.addEventListener('DOMContentLoaded', (e) => {

    console.log(this);
    // Navbar article lenght/progress indicator
    const articleProgressIndicator = document.getElementById('navbarArticleProgressIndicator');
    articleProgressIndicator.addEventListener('scroll', () => {
        this.boderColor = '#333';
        console.log(this);
    });
});