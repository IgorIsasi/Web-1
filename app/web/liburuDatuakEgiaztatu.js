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