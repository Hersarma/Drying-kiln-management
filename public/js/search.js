
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

});
