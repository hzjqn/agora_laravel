window.onload = () => {
    const inputs = document.querySelectorAll('input.solid-input');

    

    for(let i = 0; i < inputs.length; i++){
        inputs[i].addEventListener('input', function(){ inputValueChange(this) });
        inputInit(inputs[i]);
    }

    function inputValueChange(solidInput){ 
        if(solidInput.value.length){
            solidInput.classList.remove('empty');
            solidInput.classList.add('not-empty');
        } else{
            solidInput.classList.add('empty');
            solidInput.classList.remove('not-empty');
        }
    }

    function inputInit(Input){
        console.log(Input); 
        inputValueChange(Input);
    }
}