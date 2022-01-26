$(document).ready(function()
{
    $('.animate').click(function(){
        $('.animation').show();
    });

    $('input[type="file"]').change(function() {
    var files = $('input[type="file"]').prop("files");
    var names = $.map(files, function(val) { return val.name; });

    jQuery.each( names, function(i,name) {
        $('#file_name').append('<p class="md:inline text-green-500 p-4">'+ name + '</p>');
    });

});

});

