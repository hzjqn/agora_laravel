window.addEventListener('DOMContentLoaded', function(){
    const inputs = document.querySelectorAll('input.solid-input, input.solid-title-input');



    for(let i = 0; i < inputs.length; i++){
        inputValueChange(inputs[i], inputs[i].parentElement.querySelector('.length-indicator .counter'));

        inputs[i].addEventListener('input', function(){     inputValueChange(this, this.parentElement.querySelector('.length-indicator .counter'))
        });
    }

    function inputValueChange(solidInput, maxLenghtIndicator = null){
        if(solidInput.value.length){
            solidInput.parentElement.classList.remove('empty');
            solidInput.parentElement.classList.add('not-empty');
        } else{
            solidInput.parentElement.classList.add('empty');
            solidInput.parentElement.classList.remove('not-empty');
        }
        if(maxLenghtIndicator){
            let currentLength = solidInput.value.length;
            let maxLength = solidInput.dataset.maxChars;
            let lengthIndicator = maxLenghtIndicator;

            lengthIndicator.innerHTML = currentLength+"/"+maxLength;
        }
    }

    function inputInit(Input){
        console.log(Input);
        inputValueChange(Input);
    }
});