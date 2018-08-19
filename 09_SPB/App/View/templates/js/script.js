$(function(){
    $('.menuTuggle').on('click', function () {
        $('.menu').slideToggle(300, function () {
            if($(this).css('display') === 'none'){
                $(this).removeAttr('style');
            }
        });
    })
});

$(document).ready( function() {
    $(".file-upload input[type=file]").change(function(){
        var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").val(filename);
    });
});