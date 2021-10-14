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
   var izena = document.erregistroa.izena.value;
   var abizenak = document.erregistroa.abizenak.value;
   var NAN = document.erregistroa.NAN.value;
   var telefonoa = document.erregistroa.telefonoa.value;
   var jaiotzeData = document.erregistroa.jaiotzeData.value;
   var email = document.erregistroa.email.value;
   var pasahitza = document.erregistroa.pasahitza.value;

   if (izena.length <= 0){
           window.alert("Izena sartu");
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