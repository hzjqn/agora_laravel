window.addEventListener('DOMContentLoaded', function(){
    const commentForm = document.getElementById('commentForm');
    const content = document.querySelector('div[name="content"]');
    const user_id = document.querySelector('input[name="user_id"]');
    const article_id = document.querySelector('input[name="article_id"]');
    const _token = document.querySelector('input[name="_token"]');



    commentForm.addEventListener('submit', function(e){

        e.preventDefault();
            
        formData = new FormData();
        formData.append('content', content.innerHTML);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);
        formData.append('article_id', article_id.value);
        formData.append('_token', _token.value);

        fetch('/comment/new', {
            method: 'POST',
            body: formData
        }).then((response) => {
            return response.text()
        }).then((response)=>{
            console.log('success', response);
        }).catch((err) => {
            console.log('error >' + err)
        })
    });
});
