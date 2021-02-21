<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="javascript/script.js"></script>

<script type="text/javascript">
    //card hover jquery
    $(document).ready(function () {
        console.log("document is ready");
        $(".card").hover(
            function () {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            }, function () {
                $(this).removeClass('shadow-lg');
            }
        );
    });

    //search
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

            fetch("http://localhost/TravelPlan2563/php/get_search.php", {
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'cors', // no-cors, *cors, same-origin
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'include', // include, *same-origin, omit
                body: formData
            });
        const data = await response.json(); // parses JSON response into nativeJavaScript objects

        if (data.result.length > 0) {
            data.result.map((item, index) => {
                elem += `<div class="col-12 mb-3">`;
                elem += `<div class="card">`;
                elem += `<div class="card-body">`;
                elem += `<p>${item.name} | ${item.location}</p>`;
                elem += `<a href="detail.php?id=${item.id}" class="btn btn-primary">รายละเอียดเพิ่มติม</a>`;
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
        }
        $("#result").empty().append(elem)
        $("#pagination-link").empty().append(elemPagination)
    }

    function pageFunc(page) {
        search(page)
    }
</script>