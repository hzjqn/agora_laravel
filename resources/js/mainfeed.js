window.addEventListener('DOMContentLoaded', function(){
    const mainfeed = document.querySelector('#mainFeed');
    var flkty = new Flickity(mainfeed, {
        draggable: true,
        freeScroll: true,
        wrapAround: true,
        groupCells: true
    });
});