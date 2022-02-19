
$(document).ready(function () {

    //Clients//
    function fetch_clients(query, url_name, page) {
        $.ajax({
            url:"/search_clients?query=" + query +"&url_name=" + url_name + "&page=" + page,
            success: function (data) {
                if (!data){   
                    $('.searchClient').html('<p class="text-white py-4">Nema rezultata</p>');
                    $('.show_client_link').show();
                }
                else{   
                    $('.searchClient').html(data);
                    $('.show_client_link').hide();
                }
            }
        })
    }

    function fetch_mail_inbox(page, query) {
        $.ajax({
            url:"/search_mail_inbox?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchMailInbox').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchMailInbox').html(data);
                }
            }
        })
    }

    function fetch_incomings(page, query) {
        $.ajax({
            url:"/search_incomings?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchIncoming').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchIncoming').html(data);
                }
            }
        })
    }

     function fetch_outgoings(page, query) {
        $.ajax({
            url:"/search_outgoings?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('#searchOutgoing').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('#searchOutgoing').html(data);
                }
            }
        })
    }

    $(document).on('keyup', '.search_mail_inbox', function () {
        let query = $(this,'.search_mail_inbox').val();
        let page = $('#hidden_page').val(1);
        fetch_mail_inbox(page, query);
    });

    $(document).on('click', '.paginationsearch_mail_inbox, .paginationmail', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $(this,'.search_mail_inbox').val();
      $('.trash').hide();
      fetch_mail_inbox(page, query);
    });

    $(document).on('keyup', '.search_incoming', function () {
        let query = $(this, '.search_incoming').val();
        let page = $('#hidden_page').val(1);
        
        fetch_incomings(page, query);
    });

    $(document).on('click', '.paginationsearch_incomings, .paginationincoming', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_incoming').val();
      $('.trash').hide();
      fetch_incomings(page, query);
    });

    $(document).on('click', '.paginationmobilesearch_incomings, .paginationmobileincoming', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_incoming').val();
      $('.trash').hide();
      fetch_incomings(page, query);
    });

    $(document).on('keyup', '#search_outgoing', function () {
        let query = $('#search_outgoing').val();
        let page = $('#hidden_page').val(1);
        fetch_outgoings(page, query);
    });

    $(document).on('click', '.paginationsearch_outgoings, .paginationoutgoing', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_outgoing').val();
      $('.trash').hide();
      fetch_outgoings(page, query);
    });
    
    $(document).on('keyup', '.search_clients', function () {
        let query = $(this,'.search_clients').val();
        let page = $('#hidden_page').val(1);
        let url_name = $('#url_name').text().split('/')[0];
        fetch_clients(query, url_name, page);
    });
    $(document).on('click', '.paginationsearch_clients, .paginationclients', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_clients').val();
      let url_name = $('#url_name').text().split('/')[0];
      $('.trash').hide();
      fetch_clients(query, url_name, page);
    });

    $(document).on('click', '.paginationmobilesearch_clients, .paginationmobileclients', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_clients').val();
      let url_name = $('#url_name').text().split('/')[0];
      $('.trash').hide();
      fetch_clients(query, url_name, page);
    });

    $(document).on('keyup', '.search_clients_edit', function () {
        let query = $('.search_clients_edit').val();
        let url_name = $('#url_name').text().split('/')[0];
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
        $(".remove_client").show();
        let client =$(this).text();
         $(".set_client").append(client + ',');
         $('.client_name_value').val($('.client_name_value').val() + client + ',');
    });

    $(document).on('click', '.remove_client', function () {
        $(".set_client").empty();
        $(".client_name_value").val('');
        $(".remove_client").hide();
    });

    $(document).on('click', '.get_route_id', function () {
        let href = $(this).children('span').text();
        $('.route_id').attr('action', href);
        $('.modal_warning').toggle(500);
    });

    $(document).on('click', '.get_route_id_drykiln', function () {
        let href = $(this).children('span').text();
        $('.route_id_drykiln').attr('action', href);
        $('.modal_warning_powerof_drykiln').toggle(500);
    });

    $(document).on('click', '.get_client_name', function () {
        $(".set_client_edit").show();
        $(".remove_client_edit").show();
        let client =$(this).text();
         $(".set_client_edit").append(client + ',');
         $('.client_name_value_edit').val($('.client_name_value_edit').val() + client + ',');
    });

    $(document).on('click', '.remove_client_edit', function () {
        $(".set_client_edit").empty();
        $(".client_name_value_edit").val('');
        $(".remove_client_edit").hide();
    });

});
