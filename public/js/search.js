
$(document).ready(function () {

    //Clients//
    function fetch_clients(query) {
        $.ajax({
            url: "search_clients?query=" + query,
            success: function (data) {
                $('#searchClient').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_clients', function () {
        let query = $('#search_clients').val();

        fetch_clients(query);
    });

    function fetch_timber_incoming_clients(query) {
        $.ajax({
            url: "/search_timberincoming_clients?query=" + query,
            success: function (data) {
                $('#searchTimberIncomingClient').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_timber_incoming_clients', function () {
        let query = $('#search_timber_incoming_clients').val();

        fetch_timber_incoming_clients(query);
    });

});
