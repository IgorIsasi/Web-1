const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const espresioak = {
    nan: /^\d{8}[A-Z]$/, // 7 a 14 numeros.
	izenAbizen: /^[a-zA-ZÀ-ÿ\s]{5,40}$/, // Letras y espacios, pueden llevar acentos.
	pasahitza: /^.{8,20}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefonoa: /^\d{9}$/, // 7 a 14 numeros.
    jaiotzeData: /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/
}
const validarFormulario=(e)=>{
    switch(e.target.name){
        case "izenAbizen":
            validarCampo(espresioak.izenAbizen, e.target, 'izenAbizen');
        break;        
        case "nan":
            validarCampo(espresioak.nan, e.target, 'nan');
        break;
        case "pasahitza":
            validarCampo(espresioak.pasahitza, e.target, 'pasahitza');        
        break;
        case "telefonoa":
            validarCampo(espresioak.telefonoa, e.target, 'telefonoa');
        break;
        case "jaiotzeData":
            validarCampo(espresioak.jaiotzeData, e.target, 'jaiotzeData');
        break;
        case "email":
            validarCampo(espresioak.email, e.target, 'email')
        break;
    }
    
}

const validarCampo=(expresion,input,campo)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');            
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo')
    }else{
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo')
    }
}


inputs.forEach((input)=>{ 
    //Zerbai input batean aldatzen bada validarFormulario() funtzioa
    //exekutatuko da. Baita input-aren kanpoan klik egiten bada.
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);
})

formulario.addEventListener('submit', (e)=>{
    e.preventDefault(); //Para evitar que sea enviado
})