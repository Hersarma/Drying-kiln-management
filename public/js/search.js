
$(document).ready(function () {

    //Clients//
    function fetch_clients(query, url_name) {
        $.ajax({
            url: "search_clients?query=" + query +"&url_name=" + url_name,
            success: function (data) {
                $('#searchClient').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_clients', function () {
        let query = $('#search_clients').val();
        let url_name = $('#url_name').text();
        fetch_clients(query, url_name);
    });

    $(document).on('click', '.get_client_id', function () {
        let client =$(this).text();
        let id = $(this).children("input").val();
        $("#client_id").val(id);
         $(".set_client").text(client);
         $(".clients").toggle(500);
    });

    $(document).on('click', '.get_client_name', function () {
        $(".set_client").show();
        let client =$(this).text();
         $(".set_client").append(client);
    });

    $(document).on('click', '.get_route_id', function () {
        let href = $(this).children('span').text();
        $('.route_id').attr('action', href);
        $('.modal_warning').toggle(500);
    });

});
