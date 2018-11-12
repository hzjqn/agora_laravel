window.addEventListener('DOMContentLoaded', () => {
    let parragraphs = document.querySelectorAll('p');
    let longestP = document.createElement('p');
    for(let i = 0; i < parragraphs.length; i++){
        if (parragraphs[i].innerText.length > longestP.innerText.length){
            longestP = parragraphs[i];
        }
    }

    console.log("ECMA se repite " + document.body.innerHTML.match(/ECMA/g).length + ' veces');

    longestP.classList.add('longest');


    let bodyText = document.body.innerHTML.replace('ActionScript', 'PORQUERIASCRIPT');
    document.body.innerHTML = bodyText;

});
