window.addEventListener('DOMContentLoaded', function(){
    const navbar = document.getElementById('navbar')
    const categoriesNav = document.getElementById('category-navbar')
    const menuBtn = document.getElementById('navbar-toggle')
    const navbarCollapse = document.getElementById('navbar-collapse')
    
    var flkty = new Flickity(categoriesNav, {
        cellAlign: 'left',
        draggable: true,
        watchCSS: true,
        prevNextButtons: false,
        pageDots: false,
        contain: true
    });
});