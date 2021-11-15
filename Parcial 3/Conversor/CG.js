$(document).ready( function() {

    $("#Button").click(ClickButton);

    function ClickButton() {
        var grado = $("#grados").val();
    
        $.get("CG.php", {grados: grado}, Respuestas);        
    } 
    function Respuestas(Dato) {
        $('#resultado').html('<h3>El resultado de La conversion de grados Farenheit a Celsius es: '+ Dato +' </h3> ');
    }
    
    });
