$(function(){
    $('.carousel').find('.carousel-item:first').addClass('active');
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: 'action=loadTypes',
        success: function (result) {
            $('#select1').html(result);
        },complete: function(e) {
            $('#select1').multiselect();
        }
    });
});
