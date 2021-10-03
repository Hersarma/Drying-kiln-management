
$(document).ready(function () {

//Product//
    function fetch_product(query, category) {
        $.ajax({
            url: "/products/search_products?query=" + query + "&category=" +category,
            success: function (data) {
                $('#searchProduct').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_products', function () {
        let query = $('#search_products').val();
        let category = $('#category_id').val();

        fetch_product(query, category);
    });

    //Clients//
    function fetch_clients(query) {
        $.ajax({
            url: "/clients/search_clients?query=" + query,
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
            url: "/timberincoming/clients/search_clients?query=" + query,
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
