function generar_respuestas() {
    let cantidad = $("#cantidad").val();
    let html = "";
    for (let index = 0; index < cantidad; index++) {
        html += '<fieldset> <legend> Respuesta '{index}'</legend> <textarea class="" name="respuesta[]" required placeholder="Respuesta..."> </textarea><label>Es la correcta: <input type="radio" name="correcta" value="${index}" required></label> </fieldset>';
    }

    $("#respuestas").html(html);
    //console.log(cantidad);
}