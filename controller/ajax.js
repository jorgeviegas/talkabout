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

function getDados() {
    var cod = document.getElementById("cod").value;
    var sit = document.getElementById("sit").value;
    var pal = document.getElementById("pal").value;
    var eta = document.getElementById("eta").value;
    var ab_mes = document.getElementById("ab_mes").value;
    var ab_ano = document.getElementById("ab_ano").value;
    var fe_mes = document.getElementById("fe_mes").value;
    var fe_ano = document.getElementById("fe_ano").value;

    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();
    result.innerHTML = '<br><br><br><div style="text-align:center display:block; position: absolute; top: 250px; left: 720px;"><img align="middle" src="./view/images/loading.gif"/></center></div>';
    xmlreq.open("GET", "./controller/query_atend.php?cod=" + cod +"&sit=" + sit + "&pal="+pal+ "&eta="+eta+ "&ab_mes="+ab_mes+ "&ab_ano="+ab_ano+ "&fe_ano="+fe_ano+ "&fe_mes="+fe_mes, true);
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

function validaUsername(){
    var cod = document.getElementById("username").value;
    var result = document.getElementById("validauser");
    var xmlreq = CriaRequest();
    result.innerHTML = '';
    xmlreq.open("GET", "./controller/query_atend.php?username=" + cod, true);
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