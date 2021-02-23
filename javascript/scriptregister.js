

function Check()
{  var pass=document.getElementById("pass").value;
   var repass=document.getElementById("repass").value;
   if(pass==repass)
    {
        document.getElementById("message").innerHTML = "รหัสผ่านตรงกัน";
    }else{
        document.getElementById("message").innerHTML = "รหัสผ่านไม่ตรงกัน";
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