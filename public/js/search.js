/**
 * Created by shuma on 5/17/2021.
 */
$(document).ready(function () {

//Category//
    function fetch_category(query) {
        $.ajax({
            url: "/categories/search_categories?query=" + query,
            success: function (data) {
                $('#searchCategory').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_categories', function () {
        var query = $('#search_categories').val();

        fetch_category(query);
    });

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
        var query = $('#search_products').val();
        var category = $('#category_id').val();

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
        var query = $('#search_clients').val();

        fetch_clients(query);
    });

    //Vehicle//
    function fetch_vehicles(query) {
        $.ajax({
            url: "/vehicles/search_vehicles?query=" + query,
            success: function (data) {
                $('#searchVehicles').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_vehicles', function () {
        var query = $('#search_vehicles').val();

        fetch_vehicles(query);
    });

    //Drivers//
    function fetch_drivers(query) {
        $.ajax({
            url: "/drivers/search_drivers?query=" + query,
            success: function (data) {
                $('#searchDrivers').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_drivers', function () {
        var query = $('#search_drivers').val();

        fetch_drivers(query);
    });

    //Assigned Driver//
    function fetch_assign_drivers(query) {
        $.ajax({
            url: "/drivers/search_assign_drivers?query=" + query,
            success: function (data) {
                $('#searchAssignDrivers').html(data);
            }
        })
    }

    $(document).on('keyup', '#search_assign_drivers', function () {
        var query = $('#search_assign_drivers').val();

        fetch_assign_drivers(query);
    });

});
