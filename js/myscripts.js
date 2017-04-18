/*
Funcion para traer los datos del comodatario
*/
function buscarcom() {
var str = document.getElementById("dni").value;

    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      $("respuestatxt").hide();
      if (this.responseText != 'No existe'){
            document.getElementById("respuestatxt").innerHTML = this.responseText;
            document.getElementById("mySubmit").disabled = false;
            document.getElementById('oculto').style.display = 'block';/*muestra el msj oculto en la devolcuion de comodato*/
            if(this.responseText == 'No existe un comodatario con ese DNI'){
              //este condicional es para que no muestre la seccion 'motivo' en 'devolucion de comodato'
              //al no encontrar un comodatario en la BBDD.
                document.getElementById('oculto').style.display = 'none';
                document.getElementById("mySubmit").disabled = true;
            }
            $("#respuestatxt").slideDown("slow");
      } else {
          document.getElementById("mySubmit").disabled = true;
      }

    }
};
xmlhttp.open("GET","../includes/buscarcom.php?q="+str,true);
xmlhttp.send();
}

/*
Funcion para traer los datos del comodatario de una migración
*/
function buscarcom_m() {
var str = document.getElementById("dni").value;

    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      $("respuestatxt").hide();
      if (this.responseText != 'No existe'){
            document.getElementById("respuestatxt").innerHTML = this.responseText;
            document.getElementById("mySubmit").disabled = false;
            $("#respuestatxt").slideDown("slow");
      } else {
          document.getElementById("mySubmit").disabled = true;
      }

    }
};
xmlhttp.open("GET","../includes/buscarcom_m.php?q="+str,true);
xmlhttp.send();
}
