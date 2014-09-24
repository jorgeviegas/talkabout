function CriaRequest() {
    try {
        request = new XMLHttpRequest();
    }
    catch (IEAtual) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (IEAntigo) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (falha) {
                request = false;
            }
        }
    }
    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

function validaUsername(){
    var cod = document.getElementById("username").value;
    var result = document.getElementById("validauser");
    var xmlreq = CriaRequest();
    result.innerHTML = '';
    xmlreq.open("GET", "./controller/validar_username.php?username=" + cod, true);
    xmlreq.onreadystatechange = function() {
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            }
            else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}