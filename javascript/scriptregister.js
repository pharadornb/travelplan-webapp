function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confrimpassword").val();

    if (password != confirmPassword){
        document.getElementById('message').innerHTML = "<br><div class='nf'>รหัสผ่านไม่ตรงกัน</div>";
    }else{
        document.getElementById('message').innerHTML = "<br><div class='nft'>รหัสผ่านถูกต้อง</div>";
    }
}

function previewImage(){
    var file = document.getElementById("image").files;
    if(file.length > 0){
        var fileReader = new FileReader();
        fileReader.onload = function(event){
            document.getElementById("pre").innerHTML = "<img id='preview' style='width: 50%;'>";
            document.getElementById("preview").setAttribute("src", event.target.result);
        };

        fileReader.readAsDataURL(file[0]);
    }
}