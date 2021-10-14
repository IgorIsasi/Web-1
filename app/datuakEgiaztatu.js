const formulario = document.getElementById('idFormulario');
const inputs = document.querySelectorAll('#formulario input');


const expresiones = {
	izena: /^[a-zA-ZÀ-ÿ\s]{8,25}$/, // Letras y espacios, pueden llevar acentos.
	pasahitza: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefonoa: /^\d{9}$/, // 7 a 14 numeros.
        NAN: /^\d{8}[A-Z]{1}$/

}



function datuakEgiaztatuLogin(){
   var email = document.login.email.value;
   var pasahitza = document.login.pasahitza.value;

   if (email.length <= 0){
            window.alert("Ez duzu email-a sartu");
   }
   else if (pasahitza.length <= 0) {
            window.alert("Ez duzu pasahitza sartu");
   }
   else { 
           document.login.submit();
   }
}

function datuakEgiaztatuErregistroa(){
        


   var izena = document.getElementById('idIzena');
   var abizenak = document.getElementById('idAbizena');
   var NAN = document.getElementById('idNan');
   var telefonoa = document.getElementById('idTelefonoa');
   var jaiotzeData = document.getElementById('idJaiotzeData');
   var email = document.getElementById('idEmail');
   var pasahitza = document.getElementById('idPasahitza');



   if (izena.length <= 0){
           
   }
   else if (abizenak.length <= 0){
           window.alert("Abizenak sartu");
   }
   else if (NAN.length <= 0){
           window.alert("NAN zenbakia sartu");
   }
   else if (telefonoa.length <= 0){
           window.alert("Telefono zenbakia sartu");
   }
   else if (jaiotzeData.length <= 0){
           window.alert("Jaiotze data sartu");
   }
   else if(email.length <= 0){
           window.alert("Email-a sartu");
   }
   else if(pasahitza.length <= 0) {
           window.alert("Pasahitza sartu");
   }
   else{
           document.erregistroa.submit();
   }       
}

function datuakEgiaztatuLiburuaSartu(){
        var izena = document.liburuaSartu.izena.value;
        var egilea = document.liburuaSartu.egilea.value;
        var orriKop = document.liburuaSartu.orriKop.value;
        var prezioa = document.liburuaSartu.prezioa.value;
        var stock = document.liburuaSartu.stock.value;
        var irudia = document.liburuaSartu.irudia.value;
     
        if (izena.length <= 0){
                window.alert("Izena sartu");
        }
        else if (egilea.length <= 0){
                window.alert("Egilea sartu");
        }
        else if (orriKop.length <= 0){
                window.alert("Orri kopurua sartu");
        }
        else if (prezioa.length <= 0){
                window.alert("Prezioa sartu");
        }
        else if (stock.length <= 0){
                window.alert("Liburu kopurua sartu");
        }
        else if(irudia.length <= 0){
                window.alert("Irudia sartu");
        }
        else{
                document.liburuaSartu.submit();
        }       
}