$(document).ready(function()
{
    $('.animate_mail_send').click(function(){
        $('.animation_mail_send').show();
    });

    $('.animate_mail_server').click(function(){
        $('.animation_mail_server').show();
    });

    $('input[type="file"]').change(function() {
    var files = $('input[type="file"]').prop("files");
    var names = $.map(files, function(val) { return val.name; });

    jQuery.each( names, function(i,name) {
        $('.file_name').append('<p class="remove_file mt-2 mb-2 h-6 px-2 py-1 rounded-xl shadow-xl bg-gray-900 border-l-4 border-r-4 border-teal-400 cursor-pointer text-white"><i class="fas fa-times px-2 text-red-500"></i>' + name + ',</p>');
    });

    });

    $(document).on('click', '.file', function(){
    //e.preventDefault();
    $('.file_name').empty();
    });

   $(document).on('click', '.remove_file', function(e){
    e.preventDefault();
    $(this).remove();
    });
    

});

