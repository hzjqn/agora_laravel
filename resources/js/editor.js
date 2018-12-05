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
    const form = document.getElementById('editorMain');
    const cover = form.querySelector('input[name="cover"]');
    const token = form.querySelector('input[name="_token"]');
    const title = form.querySelector('input[name="title"]');
    const user_id = form.querySelector('input[name="user_id"]');
    const publishBtn = document.getElementById('publishBtn');
    const saveBtn = document.getElementById('saveBtn');

    // Apuntamos a nuestro article body para objetener el valor del mismo
    const content = document.querySelector('#article');


    
    
    form.addEventListener('submit', function(e){
        e.preventDefault();
    });
    
    publishBtn.addEventListener('click', function(e){
        e.preventDefault();
        
        const button = this;
        
        previousHTML = this.innerHTML;
        this.innerHTML = previousHTML + "<i class='fas fa-spin fa-circle-notch'></i>";
        saveBtn.disabled = true;
        this.disabled = true;
        
        let formData = new FormData();
        formData.append('title', title.value)
        formData.append('_token', token.value);
        formData.append('cover', cover.files[0]);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);

        fetch('/api/article/new', {
            method: "POST",
            body: formData
        }).then(function(response){
            return response.json();
        }).then(function(response){
            button.classList.add('success');
            button.innerHTML = "<i class='fas fa-spin fa-circle-notch'></i>";
            location.href = location.protocol+'/article/'+response.article.id;
        }).catch(function(data){
            console.log('data', data);
        });
    });

    saveBtn.addEventListener('click', function(e){
        e.preventDefault();
        
        const that = this;

        previousHTML = this.innerHTML;
        this.innerHTML = previousHTML + "<i class='fas fa-spin fa-circle-notch'></i>";
        saveBtn.disabled = true;
        this.disabled = true;

        let formData = new FormData();

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);
        formData.append('cover', cover.files[0]);
        formData.append('draft', 1);


        fetch('/api/article/new', {
            method: "POST",
            body: formData
        }).then(function(response){
            console.log(formData)
            response.json();
        }).then(function(data){
        }).catch(function(data){
            console.log('data', data);
        });
    });
});
