<script>
function setCookie(cname,cvalue,exdays){
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function changeMenu(){
    document.getElementById("idsesion").innerHTML = "<a id='idsession' onclick='callCarrito()'>Carrito</a>";
    document.getElementById("cerrar_Sesion").innerHTML = "<a onclick='cerrar_S()'>CERRAR</a>";

}

function checkCookie() {
    var user=getCookie("dni");
    //console.log(user);
    if (user != "" ) {
        AjaxGetOrdenVenta();      
        console.log("Welcome again " + user);
        console.log("Welcome again " + getCookie("ordenventa"));
        changeMenu();
        ActivateShopp();
    } else {
       if (dni != "" && dni != null) {
            console.log("Agregado");
            setCookie("dni", dni, 30);
            AjaxGetOrdenVenta();
            changeMenu();
            ActivateShopp();
       }else{
            console.log("Please login:");
       }
    }
}
</script>
