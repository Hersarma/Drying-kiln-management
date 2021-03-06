
$(document).on('click', '.client', function(e){
    e.preventDefault();
    $('.clients').toggle(500);
});

$(document).on('click', '.client_edit', function(e){
    e.preventDefault();
    $('.clients_edit').toggle(500);
});

/*Side bar toggle*/

$(document).on('click', '#hamburger', function(e){
    e.preventDefault();
    $('#side_bar').show('slide',300);
});
$(document).on('click', '#hamburger_close', function(e){
    e.preventDefault();
    $('#side_bar').hide('slide',300);
});

/*User profile toggle*/

$(document).on('click', '#user_open', function(e){
    e.preventDefault();
    $('#user_profile').toggle(500);
});
/*Legend toggle*/
$(document).on('click', '.toggle_notfications', function(e){
    e.preventDefault();
    $('.hidde_notifications').slideToggle(500); 
});

/*Notifications toggle*/
$(document).on('click', '#legend_open', function(e){
    e.preventDefault();
    $('#legend_show').slideToggle(500);
    
})
/*Warning message modal*/

$(document).on('click', '.close_modal_warning', function(e){
    e.preventDefault();
    $('.modal_warning').toggle(500);
});

$(document).on('click', '.close_modal_warning_drykiln_power_of', function(e){
    e.preventDefault();
    $('.modal_warning_powerof_drykiln').toggle(500);
});

/*client modals*/
$(document).on('click', '.toggle_modal_create_client', function(e){
    e.preventDefault();
    $('.modal_create_client').toggle(500);
});

$(document).on('click', '.toggle_modal_edit_client', function(e){
    e.preventDefault();
    $('.modal_edit_client').toggle(500);
});

/*Timber incoming modals*/
$(document).on('click', '.toggle_modal_create_incoming', function(e){
    e.preventDefault();
    $('.modal_create_incoming').toggle(500);
});

/*Timber edit modal*/
$(document).on('click', '.toggle_modal_edit_incoming', function(e){
    e.preventDefault();
    $('.modal_edit_incoming').toggle(500);
});

/*Timber outgoing modals*/

$(document).on('click', '.toggle_modal_create_outgoing', function(e){
    e.preventDefault();
    $('.modal_create_outgoing').toggle(500);
});

/*Timber edit modal*/
$(document).on('click', '.toggle_modal_edit_outgoing', function(e){
    e.preventDefault();
    $('.modal_edit_outgoing').toggle(500);
});

/*Timber links*/

$(document).on('click', '.open_timber', function(){
    $('.timber_links').toggle(300);
});

/*Drykiln modals*/
$(document).on('click', '.toggle_modal_create_drykiln', function(e){
    e.preventDefault();
    $('.modal_create_drykiln').toggle(500);
});
$(document).on('click', '.toggle_modal_edit_drykiln', function(e){
    e.preventDefault();
    $('.modal_edit_drykiln').toggle(500);
});

/*Drykiln config create*/
$(document).on('click', '.toggle_modal_create_drykiln_config', function(e){
    e.preventDefault();
    $('.modal_create_drykiln_config').toggle(500);
});

/*Drykiln config edit*/

$(document).on('click', '.toggle_modal_edit_drykiln_config', function(e){
    e.preventDefault();
    $('.modal_edit_drykiln_config').toggle(500);
});

/*Drykiln readings*/
$(document).on('click', '.toggle_modal_create_drykiln_readings', function(e){
    e.preventDefault();
    $('.modal_create_drykiln_readings').toggle(500);
});

/*Mail incoming config*/
$(document).on('click', '.toggle_modal_create_mail_incoming', function(e){
    e.preventDefault();
    $('.modal_create_mail_incoming').toggle(500);
});

$(document).on('click', '.toggle_modal_edit_mail_incoming', function(e){
    e.preventDefault();
    $('.modal_edit_mail_incoming').toggle(500);
});

/*Mail outgoing config*/
$(document).on('click', '.toggle_modal_create_mail_outgoing', function(e){
    e.preventDefault();
    $('.modal_create_mail_outgoing').toggle(500);
});

$(document).on('click', '.toggle_modal_edit_mail_outgoing', function(e){
    e.preventDefault();
    $('.modal_edit_mail_outgoing').toggle(500);
});

/*Users modals*/
$(document).on('click', '.toggle_modal_create_user', function(e){
    e.preventDefault();
    $('.modal_create_user').toggle(500);
});

$(document).on('click', '.toggle_modal_edit_user', function(e){
    e.preventDefault();
    $('.modal_edit_user').toggle(500);
});

$(document).on('click', '.toggle_modal_edit_user_password', function(e){
    e.preventDefault();
    $('.modal_edit_user_password').toggle(500);
});


