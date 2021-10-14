var buscador = $("#table").DataTable(); //la variable buscado va a ser igual a la tabla 

$("#int-search").keyup(function(){ // se ejecuta mediante una función 
    
    buscador.search($(this).val()).draw();
    
    if ($("#int-search").val() == ""){
        $(".content-search").fadeOut(300); //Permite ocultar
    }else{
        $(".content-search").fadeIn(300); // en caso de que no este vacio se mostrara mediante el fadeIn
    }
})