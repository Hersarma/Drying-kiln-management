
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
    if ($('#side_bar').is(':visible')) {
      $('#side_bar').animate({
        'width': '0px'
      }, 'slow', function() {
        $('#side_bar').hide();
      });
      $('#content').animate({
        'margin-left':'0px'
      }, 'slow');
    } else {
      $('#side_bar').show();
      $('#side_bar').animate({
        'width': '14rem'
      }, 'slow');
      $('#content').animate({
        'margin-left':'14rem'
      }, 'slow');
    }
});

/*User profile toogle*/

$(document).on('click', '#user_open', function(e){
    e.preventDefault();
    $('#user_profile').toggle(500);
});
/*Legend toogle*/

$(document).on('click', '#legend_open', function(e){
    e.preventDefault();
    $('#legend_show').toggle(500);
});

/*Warning message modal*/

$(document).on('click', '.close_modal_warning', function(e){
    e.preventDefault();
    $('.modal_warning').toggle(500);
});

$(document).on('click', '.close_modal_warning_drykiln_power_of', function(e){
    e.preventDefault();
    $('.modal_warning_powerof_drykiln').toggle(500);
});

/*Show/hide messages*/
$(document).ready(function(){
    $(".successMessage").slideDown().delay(2000).slideUp();
});
$(document).ready(function(){
    $(".welcomeMessage").slideDown().delay(2000).slideUp();
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




