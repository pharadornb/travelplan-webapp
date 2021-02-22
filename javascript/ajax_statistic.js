//ajax_user_count.php
function loadXMLDoc_ajax_user_count() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax_user_count").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "admin/ajax_user_count.php", true);
    xhttp.send();
}
setInterval(function (){
    loadXMLDoc_ajax_user_count();
},1000);
window.onload = loadXMLDoc_ajax_user_count();

//ajax_user_name.php
function loadXMLDoc_ajax_user_name() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax_user_name").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "admin/ajax_user_name.php", true);
    xhttp.send();
}
setInterval(function (){
    loadXMLDoc_ajax_user_name();
},1000);
window.onload = loadXMLDoc_ajax_user_name();

//ajax_travel_count.php
function loadXMLDoc_ajax_travel_count() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax_travel_count").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "admin/ajax_travel_count.php", true);
    xhttp.send();
}
setInterval(function (){
    loadXMLDoc_ajax_travel_count();
},1000);
window.onload = loadXMLDoc_ajax_travel_count();

//ajax_travel_name.php
function loadXMLDoc_ajax_travel_name() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax_travel_name").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "admin/ajax_travel_name.php", true);
    xhttp.send();
}
setInterval(function (){
    loadXMLDoc_ajax_travel_name();
},1000);
window.onload = loadXMLDoc_ajax_travel_name();