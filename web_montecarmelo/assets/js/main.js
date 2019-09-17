function openShopping(){
    var botones =document.getElementsByClassName('btnHiden');
    for(var i = 0; i < botones.length; i++) {
     botones[i].style.visibility = 'visible';
    }
}
function ActivateShopp() {
    var dni = getCookie("dni");
    var ordenventa = getCookie("ordenventa");
    if((ordenventa != null )&&( dni =! null)){
        openShopping();
        //loadShoppingCar(dni, ordeventa);
    }
    return ;              // The function returns the product of p1 and p2
} 

function AjaxGetOrdenVenta(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var str = this.responseText;
            str=str.trim();
            setCookie("ordenventa", str, 30);
            console.log("data Ajax: "+str);
        }
    };
    xhttp.open("GET", "venta/ordencrear.jsp?dni="+getCookie("dni"), true);
    xhttp.send();
}

function AjaxPushOrdenVenta(idauto,marca,modelo){
    var ordenventa = getCookie("ordenventa");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            console.log("Auto agregado: "+idauto);
            alert("Su auto "+this.responseText)
        }
    };
    xhttp.open("GET", "venta/agregarauto.jsp?ordenventa="+ordenventa+"&auto="+idauto+"&cantidad=1", true);
    xhttp.send();
}

function AjaxOutOrdenVenta(idauto,marca,modelo){
    var ordenventa = getCookie("ordenventa");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            console.log("Auto agregado: "+idauto);
            alert("Su auto "+this.responseText)
            location.reload();
        }
    };
    xhttp.open("GET", "venta/eliminarauto.jsp?ordenventa="+ordenventa+"&auto="+idauto+"&cantidad=1", true);
    xhttp.send();
}

function callCarrito(){
    location.href = "carrito.jsp?dni="+getCookie("dni")+"&ordenventa="+getCookie("ordenventa");
}

function cerrar_S(){
    setCookie("dni", "", -1)
    setCookie("ordenventa", "", -1)
    location.href ="index.jsp";
}
function comprarAutos(){
    var venta = getCookie("ordenventa");
    setCookie("ordenventa", "", -1)
    location.href ="venta/vender.jsp?idordenventa="+venta;
}