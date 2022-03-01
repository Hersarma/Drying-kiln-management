
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
    //Mobile search clients//
    $(document).on('click', '.paginationmobilesearch_clients, .paginationmobileclients', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_clients').val();
      let url_name = $('#url_name').text().split('/')[0];
      $('.trash').hide();
      fetch_clients(query, url_name, page);
    });
    
    //Mail Inbox//
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

    $(document).on('keyup', '.search_mail_inbox', function () {
        let query = $(this,'.search_mail_inbox').val();
        let page = $('#hidden_page').val(1);
        fetch_mail_inbox(page, query);
    });

    $(document).on('click', '.paginationsearch_mail_inbox, .paginationmail\\/inbox', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_mail_inbox').val();
      $('.trash').hide();
      fetch_mail_inbox(page, query);
    });
    //Mobile search mail inbox//
    $(document).on('click', '.paginationmobilesearch_mail_inbox, .paginationmobilemail\\/inbox', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_mail_inbox').val();
      $('.trash').hide();
      fetch_mail_inbox(page, query);
    });

    //Mail deleted//
    function fetch_mail_deleted(page, query) {
        $.ajax({
            url:"/search_mail_deleted?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchMailDeleted').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchMailDeleted').html(data);
                }
            }
        })
    }

    $(document).on('keyup', '.search_mail_deleted', function () {
        let query = $(this,'.search_mail_deleted').val();
        let page = $('#hidden_page').val(1);
        fetch_mail_deleted(page, query);
    });

    $(document).on('click', '.paginationsearch_mail_deleted, .paginationmail\\/deleted\\/inbox', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_mail_deleted').val();
      $('.trash').hide();
      fetch_mail_deleted(page, query);
    });
    //Mobile search mail deleted//
    $(document).on('click', '.paginationmobilesearch_mail_deleted, .paginationmobilemail\\/deleted\\/inbox', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_mail_deleted').val();
      $('.trash').hide();
      fetch_mail_deleted(page, query);
    });

    //Mail sent//
    function fetch_mail_sent(page, query) {
        $.ajax({
            url:"/search_mail_sent?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchMailSent').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchMailSent').html(data);
                }
            }
        })
    }

    $(document).on('keyup', '.search_mail_sent', function () {
        let query = $(this,'.search_mail_sent').val();
        let page = $('#hidden_page').val(1);
        fetch_mail_sent(page, query);
    });

    $(document).on('click', '.paginationsearch_mail_sent, .paginationmail\\/sent', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_mail_sent').val();
      $('.trash').hide();
      fetch_mail_sent(page, query);
    });
    //Mobile search mail sent//
    $(document).on('click', '.paginationmobilesearch_mail_sent, .paginationmobilemail\\/sent', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_mail_sent').val();
      $('.trash').hide();
      fetch_mail_sent(page, query);
    });
    //Incomings//
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
    //Mobile search incomings//
    $(document).on('click', '.paginationmobilesearch_incomings, .paginationmobileincoming', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_incoming').val();
      $('.trash').hide();
      fetch_incomings(page, query);
    });


    //Outgoings//
     function fetch_outgoings(page, query) {
        $.ajax({
            url:"/search_outgoings?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchOutgoing').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchOutgoing').html(data);
                }
            }
        })
    }
    $(document).on('keyup', '.search_outgoing', function () {
        let query = $(this, '.search_outgoing').val();
        let page = $('#hidden_page').val(1);
        fetch_outgoings(page, query);
    });

    $(document).on('click', '.paginationsearch_outgoings, .paginationoutgoing', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_outgoing').val();
      $('.trash').hide();
      fetch_outgoings(page, query);
    });
    //Mobile search outgoings//
    $(document).on('click', '.paginationmobilesearch_outgoings, .paginationmobileoutgoing', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_outgoing').val();
      $('.trash').hide();
      fetch_outgoings(page, query);
    });
    
   //Users//

   function fetch_users(page, query) {
        $.ajax({
            url:"/search_users?page=" + page + "&query=" + query,
            success: function (data) {
                if (!data){   
                    $('.searchUsers').html('<p class="text-white py-4">Nema rezultata</p>');
                }
                else{   
                    $('.searchUsers').html(data);
                }
            }
        })
    }
    $(document).on('keyup', '.search_users', function () {
        let query = $(this, '.search_users').val();
        let page = $('#hidden_page').val(1);
        fetch_users(page, query);
    });

    $(document).on('click', '.paginationsearch_users, .paginationsettings\\/users', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('.search_users').val();
      $('.trash').hide();
      fetch_users(page, query);
    });
    //Mobile search users//
    $(document).on('click', '.paginationmobilesearch_users, .paginationmobilesettings\\/users', function(event){
      event.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);

      let query = $('#search_users').val();
      $('.trash').hide();
      fetch_users(page, query);
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
