window.addEventListener('load', function(){
    const mainfeed = document.querySelector('#mainFeed');
    var flkty = new Flickity(mainfeed, {
        cellAlign: 'center',
        draggable: true,
        watchCSS: true,
        prevNextButtons: false,
        pageDots: false
    });
});