function checkUsernameMatch(){
    var user = $("#username").val();
    
}


function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confrimpassword").val();

    if (password != confirmPassword){
        document.getElementById('message').innerHTML = "<br><div class='nf'>รหัสผ่านไม่ตรงกัน</div>";
    }else{
        document.getElementById('message').innerHTML = "<br><div class='nft'>รหัสผ่านถูกต้อง</div>";
    }
}