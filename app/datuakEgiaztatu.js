const formulario = document.getElementById('idFormulario');
const inputs = document.querySelectorAll('#idFormulario input');

const espresioak = {
    Nan: /^\d{8}[A-Z]$/, // 7 a 14 numeros.
	izenaAbizena: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	pasahitza: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefonoa: /^\d{9}$/ // 7 a 14 numeros.
}
const validarFormulario=(e)=>{
    switch(e.target.name){
        case "idIzena":
            if(espresioak.izenaAbizena.test(e.target.value)){

            }else{
                document.getElementById('idIzena').classList.add()
            }
        
        break;        
        case "idAbizena":
        
        break;
        case "idNan":
        
        break;
        case "idTelefonoa":
        
        break;
        case "idJaiotzeData":
        
        break;
        case "idEmail":
        
        break;
        case "idPasahitza":
        
        break;

    }
    
}


inputs.forEach((input)=>{
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);
})

formulario.addEventListener('submit', (e)=>{
    e.preventDefault(); //Para evitar que sea enviado
})