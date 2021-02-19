<script src="javascript/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    //toggle
    $(function(){
        $(".toggle").on("click", function(){

            if($(".item").hasClass("active")){
                $(".item").removeClass("active");
                $(this).find("a").html(<i class="fas fa-bars"></i>);
            }else{
                $(".item").addClass("active");
                $(this).find("a").html(<i class="fas fa-times"></i>);
            }
        })
    });
</script>