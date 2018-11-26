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

    const publishBtn = document.querySelector('button#publishBtn');
    const saveBtn = document.querySelector('button#saveBtn');

    // Apuntamos a nuestro article body para objetener el valor del mismo
    const content = document.querySelector('#article');


    var formData = new FormData();

    const form = document.getElementById('editorMain');

    form.addEventListener('submit', function(e){
        e.preventDefault();
    });

    publishBtn.addEventListener('click', function(e){
        e.preventDefault();

        const that = this;

        previousHTML = this.innerHTML;
        this.innerHTML = previousHTML + "<i class='fas fa-spin fa-circle-notch'></i>";
        saveBtn.disabled = true;
        this.disabled = true;

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);

        setTimeout(function(){
            button = that;
            console.log('timeout');
            fetch('/api/article', {
                method: "POST",
                body: formData
            }).then(function(response){
                return response.json();
            }).then(function(response){
                button.classList.add('success');
                button.innerHTML = "<i class='fas fa-spin fa-circle-notch'></i>";
                console.log(response);
                location.href = location.protocol+'/article/'+response.article.id;
            }).catch(function(data){
                console.log('data', data);
            });
        }, 2000);
    });

    saveBtn.addEventListener('click', function(e){
        e.preventDefault();
        
        const that = this;

        previousHTML = this.innerHTML;
        this.innerHTML = previousHTML + "<i class='fas fa-spin fa-circle-notch'></i>";
        saveBtn.disabled = true;
        this.disabled = true;

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);
        formData.append('draft', 1);


        fetch('/api/article', {
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
