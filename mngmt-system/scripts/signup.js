const form = document.querySelector(".form");
const nome = document.querySelector("#nome");
const email = document.querySelector("#email");
const senha = document.querySelector("#senha");
const repetir_senha = document.querySelector("#repetir-senha");

form.addEventListener('submit', (e) => {
    
    e.preventDefault();
    checkInputs();
})

function checkInputs(){
    const nomeValue = nome.value.trim();
    const emailValue = email.value.trim();
    const senhaValue = senha.value.trim();
    const repetir_senhaValue = repetir_senha.value.trim();

    if(usernameValue == ''){
        setErrorFor(nome,'Campo nome não pode ser vazio');
    }else{
        setSuccessFor(nome);
    }
}

function setErrorFor(input,message){
    const inputGroup = input.parentElement;
    const small = formControl.querySelector("small");

    small.innerText = message;

    inputGroup.className = 'input-group error';
}


function setSuccessFor(){
    const inputGroup = input.parentElement;
    formControl.className = 'input-group success';
}