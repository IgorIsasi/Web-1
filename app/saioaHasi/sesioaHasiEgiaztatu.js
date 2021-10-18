const formulario=document.getElementById('formulario');
const inputs=document.querySelectorAll('#formulario input');

const espresioak={
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    pasahitza: /^.{8,20}$/, // 4 a 12 digitos.
}

const hutsuneenEgoera={
    email:false,
    pasahitza:false,
}

const hutsuneaOnartu=(expresion,input,campo)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');            
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        hutsuneenEgoera[campo]=true;
    }else{
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        hutsuneenEgoera[campo]=false;
    }

}

const erregistroaOnartu=(input)=>{
    switch(input.target.name){
        case 'email':
            hutsuneaOnartu(espresioak.email,input.target,'email');
        break;
        case 'pasahitza':
            hutsuneaOnartu(espresioak.pasahitza,input.target,'pasahitza');
        break;


    }
}


inputs.forEach(input => {
    input.addEventListener('keyup', erregistroaOnartu);
    input.addEventListener('blur', erregistroaOnartu);
    
});

formulario.addEventListener('submit', (e)=>{ // Lo que se activa cuando el formulario es enviado //Para evitar que sea enviado
    if(!hutsuneenEgoera.email || !hutsuneenEgoera.pasahitza){
        e.preventDefault();
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
})