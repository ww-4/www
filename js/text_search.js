let inputText=document.querySelector('.inputTextt');
    submitForm=document.querySelector('.submitFormt');
    information=document.querySelectorAll('.searchDiv');

    searchFunction=(text)=>{
        information.forEach((element)=>{
            if(element.textContent==text){
                element.style="animation:animationElemen 2s;";
                console.log(element);
            }
        });
    }
submitForm.addEventListener('click',(e)=>{
    e.preventDefault();
    searchFunction(inputText.value);
});