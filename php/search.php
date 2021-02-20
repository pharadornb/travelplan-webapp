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
integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"crossorigin="anonymous">
</head>
<body>

<div class="container-fluid py-4">
<h2 class="text-center mb-4">Search TravelPlaning</h2>
<div class="row mb-4">
<div class="col-12">
<input type="text" name="search" id="search" placeholder="Search"class="form-control"onkeyup="search(1);"autocomplete="off">

</div>
</div>
<div class="row" id="result">

</div>
<div class="row">
<div class="col-12 text-right">
<nav aria-label="...">
<ul class="pagination justify-content-end" id="pagination-link">
</ul>
</nav>
</div>
</div>
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function () {//ดักจับ event ตอนท่ีผูใ้ ชป้้อนขอ้ ความมา
});
async function search(page) {
page = page ? page : 1
let elem = "";
let elemPagination = ""
let formData = new FormData()
formData.append("search", $("#search").val())
formData.append("page", page)
const response = await

fetch("http://localhost/TravelPlan2563/get_search.php", {
method: 'POST', // *GET, POST, PUT, DELETE, etc.
mode: 'cors', // no-cors, *cors, same-origin

cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached

credentials: 'include', // include, *same-origin, omit
// headers: {
// 'Content-Type': 'application/json'
// // 'Content-Type': 'application/x-www-form-urlencoded',
// },
body: formData
});
const data = await response.json(); // parses JSON response into nativeJavaScript objects

if (data.result.length > 0) {
data.result.map((item, index) => {
elem += `<div class="col-12 mb-3">`;
elem += `<div class="card">`;
elem += `<div class="card-body">`;
elem += `<p>${item.name} | ${item.location}</p>`;
elem += `<a href="detail.php?id=${item.id}" class="btnbtn-primary">รายละเอียดเพิ่มติม</a>`;
elem += `</div>`;

elem += `</div>`;
elem += `</div>`;
})
let total_page = Math.ceil(data.total_records / 5);
for (let index = 0; index < total_page; index++) {
if (page === (index + 1)) {
elemPagination += `<li class="page-item active">`
elemPagination += `<button class="page-link">${index + 1}

</button>`

elemPagination += `</li>`
} else {
elemPagination += `<li class="page-item">`
elemPagination += `<button class="page-link"

onclick="search(${(index + 1)});">${index + 1}</button>`

elemPagination += `</li>`
}
}
} else {
//elemPagination = "";
//elem += `<div class="col-12 mb-3">`;
//elem += "<h4 class='text-center'>Data not found!</h4>"
//elem += `</div>`;
}
$("#result").empty().append(elem)
$("#pagination-link").empty().append(elemPagination)
}
function pageFunc(page) {
search(page)
}
</script>
</body>
</html>