
window.addEventListener('DOMContentLoaded', (e) => {

    // Navbar not on top styles
    const navbar = document.getElementsByClassName('navbar-agora')[0];
    window.addEventListener('scroll', function() {
        changeNavbar();
    });

    function changeNavbar(){           
        if(window.scrollY > 10){
            navbar.classList.add('not');
        }else{
            navbar.classList.remove('not');
        }
    }


    // Follow button and form
    function initFollowForm(parent){
        const followForms = parent.getElementsByClassName('follow-form');

        for (let i = 0; i < followForms.length; i++) {
            const form = followForms[i];
            
            form.addEventListener('submit', function(e){
                e.preventDefault();
                if(this.getAttribute('method') == 'post'){
                    follow(this);
                } else if (this.getAttribute('method') == 'delete'){
                    unfollow(this);
                }
            });
        }
    }

    function follow(form){
        fetch('/follow', {
            method: "POST",
            body: new FormData(form)
        })
        .then((res) => {
            return res.json();
        })
        .then((res) => {
            if(res.status == 'ok'){
                const followBtn  = form.getElementsByClassName('follow-btn')[0];
                followBtn.innerHTML = res.followbtn.html;
                followBtn.classList.remove('follow');
                followBtn.classList.add('unfollow');
                form.setAttribute('method', 'delete');
            } else {
                console.log(res.status)
            }
        })
        .catch((err) => {
            console.log(err);
        });
    }

    function unfollow(form){
        let formData = new FormData(form);
        formData.append('_method', 'DELETE')

        fetch('/unfollow', {
            method: "POST",
            body: formData
        })
        .then((res) => {
            return res.json();
        })
        .then((res) => {
            if(res.status == 'ok'){
                const followBtn  = form.getElementsByClassName('follow-btn')[0];
                followBtn.innerHTML = res.followbtn.html;
                followBtn.classList.remove('unfollow');
                followBtn.classList.add('follow');
                form.setAttribute('method', 'post');

            } else {
                console.log(res.status)
            }
        })
        .catch((err) => {
            console.log(err);
        });
    }

    if(document.getElementsByClassName('follow-form')){    
        initFollowForm(document);
    }

});