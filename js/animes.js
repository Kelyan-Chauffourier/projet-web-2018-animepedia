function afficherAnimeAvecLettre(str) {
    if (str.length==0) {
        document.getElementById("animesListe").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("animesListe").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","../controleur/ControleurAnime.php?letter="+str,true);
    xmlhttp.send();
}