window.addEventListener('DOMContentLoaded', function(){
    const commentForm = document.getElementById('commentForm');
    const content = document.querySelector('div[name="content"]');
    const user_id = document.querySelector('input[name="user_id"]');
    const article_id = document.querySelector('input[name="article_id"]');
    const _token = document.querySelector('input[name="_token"]');

    comment = {
        content: content.innerHTML,
        user_id: user_id.value,
        article_id: article_id.value,
        _token: _token.value
    }

    formData = new FormData(JSON.stringify(comment));

    commentForm.addEventListener('submit', function(e){
        e.preventDefault();
        fetch('/api/comment/new', {
            method: 'POST',
            body: formData
        }).then((response) => {
            return response.json()
        }).then((response)=>{
            console.log('success', response);
        }).catch((err) => {
            console.log('error >' + err)
        })
    });
});
