console.log('loaded editor js');

window.addEventListener('DOMContentLoaded', function(){

    // Instanciamos objeto MediumEditor en el div.editable. 
    var editor = new MediumEditor('.editable', {
        toolbar :   {
            updateOnEmptySelection: true,
            buttons: ['bold', 'italic', 'underline', 'anchor', 'h3', 'h4', 'quote']
        }
    });

    // Apuntamos a nuestro input para obtener el valor del titulo
    const title = document.querySelector('input[name="title"]');
    const user_id = document.querySelector('input[name="user_id"]');

    // Apuntamos a nuestro article body para objetener el valor del mismo
    const content = document.querySelector('#article');


    var formData = new FormData();

    const form = document.getElementById('editorMain');
    

    form.addEventListener('submit', function(e){        
        e.preventDefault();

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);
        
        for (var pair of formData.entries()) {
            console.log(pair[0]+ ', ' + pair[1]); 
        }

        fetch('/api/article', {
            method: "POST",
            body: formData
        }).then(function(response){
            console.log(formData)
            response.json();
        }).then(function(data){
            console.log('data', data);
        }).catch(function(data){
            console.log('data', data);
        });
    });
});