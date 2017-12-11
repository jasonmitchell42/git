<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap\bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item" data-interval="1000"><div class="c-1"><span class="timer"></span></div></div>
                    <div class="carousel-item" data-interval="2000"><div class="c-2"><span class="timer"></span></div></div>
                    <div class="carousel-item" data-interval="3000"><div class="c-3"><span class="timer"></span></div></div>
                    <div class="carousel-item" data-interval="10000"><div class="c-4"><span class="timer"></span></div></div>
                    <div class="carousel-item" data-interval="15000"><div class="c-5"><span class="timer"></span></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>-->


<script src="js/fontawesome-all.js"></script>
<script>
    $('.carousel').find('.carousel-item:first').addClass('active');

    var t;

    var start = $('#myCarousel').find('.active').attr('data-interval');
    t = setTimeout("$('#myCarousel').carousel({interval: 1000});", start-1000);

    $('#myCarousel').on('slid.bs.carousel', function () {
        clearTimeout(t);
        var duration = $(this).find('.active').attr('data-interval');

        $('#myCarousel').carousel('pause');
        t = setTimeout("$('#myCarousel').carousel();", duration-1000);
    })

    $('.carousel-control.right').on('click', function(){
        clearTimeout(t);
    });

    $('.carousel-control.left').on('click', function(){
        clearTimeout(t);
    });


    var count=30;

    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

    function timer()
    {
        count=count-1;
        if (count <= 0)
        {
            clearInterval(counter);
            //counter ended, do something here
            return;
        }

        $('.timer').html(count + ' secs');
        // document.getElementByClass("timer").innerHTML=count + " secs"; // watch for spelling
    }

</script>
</body>
</html>