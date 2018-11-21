console.log('loaded editor js');

window.addEventListener('DOMContentLoaded', function(){
    const editorToolbar = document.getElementById('editorToolbar');
    var editor = new MediumEditor('.editable', {
        toolbar :   {
            updateOnEmptySelection: true,
            buttons: ['bold', 'italic', 'underline', 'anchor', 'h3', 'h4', 'quote']
        }
    });
    const title = document.querySelector('input[name="title"]');
    const content = document.querySelector('#article');
    let formData = new FormData();
    fields = {
        title: title.value,
        content: content.innerHTML
    };

    formData.append('data', JSON.stringify(fields));

    const form = document.getElementById('editorMain');
    
    for (var pair of formData.entries()) {
        console.log(pair[0]+ ', ' + pair[1]); 
    }

    form.addEventListener('submit', function(e){
        e.preventDefault();
        fetch('/api/article', {
            method: 'POST',
            body: FormData
        }).then(function(response){
            response.json();
        }).then(function(data){
            console.log(data);
        }).catch(function(data){
            console.log(data);
        });
    });
});