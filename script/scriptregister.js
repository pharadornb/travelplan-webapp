function showHint(event){  
    var k = event.which || event.keyCode;
    
    /* เช็คตัวเลข 0-9 */
    if (k>=48 && k<=57) { 
        stralerd = "<p><div id='nf'>กรุณากรอกภาษาไทย</div></p>";
        document.getElementById("fn").innerHTML = stralerd;
    }
        
    /* เช็คคีย์อังกฤษ a-z, A-Z */
    if ((k>=65 && k<=90) || (k>=97 && k<=122)) { 
        stralerd = "<p><div id='nf'>กรุณากรอกภาษาไทย</div></p>";
        document.getElementById("fn").innerHTML = stralerd;
    }
    
    /* เช็คคีย์ไทย ทั้งแบบ non-unicode และ unicode */
    if ((k>=161 && k<=255) || (k>=3585 && k<=3675)) { 
        
     }
}

function showHpass(){
        stralerd1 = "<p><div id='np'>รหัสผ่านต้องมีตัวอักษรและตัวเลข</div></p>";
        document.getElementById("fp").innerHTML = stralerd1;
} 

function check(){
    var pass = document.formR.password.Value;
    var cpass = document.formR.cpassword.Value;

    if(pass != cpass){
        stralerd1 = "<p><div id='np'>รหัสผ่านไม่ตรงกัน</div></p>";
        document.getElementById("fpc").innerHTML = stralerd1;
    }
}
