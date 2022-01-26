$(document).ready(function()
{
    $('.animate').click(function(){
        $('.animation').show();
    });

    $('input[type="file"]').change(function() {
    var files = $('input[type="file"]').prop("files");
    var names = $.map(files, function(val) { return val.name; });

    jQuery.each( names, function(i,name) {
        $('#file_name').append('<p class="remove_file mt-2 mb-2 h-6 px-2 py-1 rounded-xl shadow-xl bg-gray-900 border-l-4 border-r-4 border-turquoise-light cursor-pointer text-white"><i class="fas fa-times px-2 text-red-500"></i>' + name + ',</p>');
    });

    });

   $(document).on('click', '.remove_file', function(e){
    e.preventDefault();
    $(this).remove();
    });
    

});

