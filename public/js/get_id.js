$(document).ready(function () {

    $(document).on('click', '.get_client_id', function () {
        let client =$(this).text();
        let id = $(this).children("input").val();
        $("#client_id").val(id);
         $(".set_client").text(client);
         $(".clients").toggle(500);
    });

    $(document).on('click', '.get_client_name', function () {
        let client_name =$(this).text();
        
         $(".set_client").append(client_name + ', ');
    });

    $(document).on('click', '.get_route_id', function () {
        let href = $(this).children('span').text();
        $('.route_id').attr('action', href);
        $('.modal_warning').toggle(500);
    });

});
