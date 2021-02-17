<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container" style="width:900px;">
   <h2 align="center">Search TravelPlaning</h2>
   <div align="center">
   <input type ="text" name="search" id="search"placeholder="Search" class="form-control"/>
   </div>
   <ul calss="list-group" id="result"></ul>  
   </div>
   <script type="text/javascript">  
       $(document).ready(function(){//ดักจับ event  ตอนที่ผู้ใช้ป้อนข้อความมา 
       
          $('#search').keyup(function(){  //นำข้อมูลที่ป้อนใน textbox มาเก็บไว้ในตัวแปรใดตัวแปรหนึ่ง
            $('#result').html('');
                   var txt = $(this).val();    // ข้อมูลที่ผู้ใช้ทำการป้อนมาเก็บลงใน  ตัวแปร txt
                  // alert(txt);

                  var expression =new RegExp(txt,"i");  //นำค่าที่อยู่ใน ตัวแปร txt มาเปรียบเทียบกับข้อมูลที่อยู่ใน json //กำหนด เคส *ในที่นี้ก็คือไม่กำหนดตัวพืมพ์เล็กหรือพืมพ์ใหญ่
                 $.getJSON("travel_data.json",function(data){
                     $.each(data,function(key,value){
                      if(value.name.search(expression)!=-1 || value.location.search(expression)!=-1 ) //เปรียบเทียบ key name และ key location  ว่ามันตรงกับที่เรารับค่าใน text มาใหม่ ใน json   //ถ้าเป็น -1 ก็คือหาไม่เจอ
                      {
                         //แสดงข้อมูล
                        
                         $('#result').append('<li class="list-group-item link-class"><img src="img/AP1.jpg" height="40" width="40" class="img-thumbnail"/>'+value.name+'|<span class="text-muted">'+value.location+'</span></li>');
                      }
                     })
                 })
          });
       });
   </script>
</body>
</html>