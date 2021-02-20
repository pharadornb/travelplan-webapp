<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <input type="text" name="search" id="search" placeholder="ค้นหาสถานที่ท่องเที่ยว" class="form-control"
                   onkeyup="search(this);" autocomplete="off">

        </div>
    </div>
    <div class="row" id="result">
    </div>
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function () {//ดักจับ event ตอนท่ีผูใ้ ชป้้อนขอ้ความมา
    });

    async function search(obj) {
        let elem = "";
        var formData = new FormData()
        formData.append("search", obj.value)
        const response = await

            fetch("http://localhost/TravelPlan2563/get_search.php", {   //เรียกหน้า get_search.php
                method: 'POST',
                mode: 'cors',

                cache: 'no-cache',

                credentials: 'include',


                body: formData
            });

        const data = await response.json(); // รับค่า response ที่ส่งมามาใส่ไว้ในตัวแปร data


        if (data.result.length > 0) {
            data.result.map((item, index) => {
                elem += `<div class="col-12 mb-3">`;
                elem += `<div class="card">`;
                elem += `<div class="card-body">`;
                elem += `<p>${item.name} | ${item.location} </p>`;
                elem += `<a href="detail.php?id=${item.id}" class="btn

btn-primary" >See detail</a>`;
                elem += `</div>`;
                elem += `</div>`;
                elem += `</div>`;
            })
        } else {
            elem += `<div class="col-12 mb-3">`;
            elem += "<h4 class='text-center'>Data not found!</h4>"
            elem += `</div>`;
        }
        $("#result").empty().append(elem)
    }
</script>
</body>
</html>