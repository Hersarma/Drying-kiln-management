/*User profile toogle*/
let user = $("#user_open");
let user_profile = $("#user_profile");

user.click(function(e) {
    e.preventDefault();
    user_profile.toggle(500);
});

let legend = $("#legend_open");
let legend_show = $("#legend_show");

legend.click(function(e) {
    e.preventDefault();
    legend_show.toggle(500);
});

/*Timber*/
let open_timber = $('.open_timber');
let timber_links = $('.timber_links');

let open_modal_create_timber_incoming = $(".open_modal_create_timber_incoming");
let close_modal_create_timber_incoming = $(".close_modal_create_timber_incoming");
let modal_create_timber_incoming = $(".modal_create_timber_incoming");

let open_modal_edit_timber_incoming = $(".open_modal_edit_timber_incoming");
let close_modal_edit_timber_incoming = $(".close_modal_edit_timber_incoming");
let modal_edit_timber_incoming = $(".modal_edit_timber_incoming");

/*Client-create*/
let open_modal_create_client = $(".open_modal_create_client");
let close_modal_create_client = $(".close_modal_create_client");
let modal_create_client = $(".modal_create_client");

/*Select client*/
let client = $("#client");
let clients = $(".clients");
let get_client_id = $(".get_client_id");

client.click(function(e) {
    e.preventDefault();
    clients.toggle(500);
});

/*Warning message modal*/
let close_modal_warning = $(".close_modal_warning");
let modal_warning = $(".modal_warning")

/*Client-edit*/
let open_modal_edit_client = $(".open_modal_edit_client");
let close_modal_edit_client = $(".close_modal_edit_client");
let modal_edit_client = $(".modal_edit_client");

/*Drykiln-create*/
let open_modal_create_drykiln = $(".open_modal_create_drykiln");
let close_modal_create_drykiln = $(".close_modal_create_drykiln");
let modal_create_drykiln = $(".modal_create_drykiln");

/*Drykiln-config-create*/
let open_modal_create_drykiln_config = $(".open_modal_create_drykiln_config");
let close_modal_create_drykiln_config = $(".close_modal_create_drykiln_config");
let modal_create_drykiln_config = $(".modal_create_drykiln_config");

/*Drykiln-config-edit*/
let open_modal_edit_drykiln_config = $(".open_modal_edit_drykiln_config");
let close_modal_edit_drykiln_config = $(".close_modal_edit_drykiln_config");
let modal_edit_drykiln_config = $(".modal_edit_drykiln_config");

/*Drykiln-readings-create*/
let open_modal_create_drykiln_readings = $(".open_modal_create_drykiln_readings");
let close_modal_create_drykiln_readings = $(".close_modal_create_drykiln_readings");
let modal_create_drykiln_readings = $(".modal_create_drykiln_readings");

/*Side bar toggle*/
let side_bar = $("#side_bar");
let hamburger_mobile = $('#hamburger_mobile');
let hamburger = $('#hamburger');
let content = $('#content');

hamburger.click(function(e) {
    e.preventDefault();
    if ($(side_bar).is(':visible')) {
      $(side_bar).animate({
        'width': '0px'
      }, 'slow', function() {
        $(side_bar).hide();
      });
      $(content).animate({
        'margin-left':'0px'
      }, 'slow');
    } else {
      $(side_bar).show();
      $(side_bar).animate({
        'width': '14rem'
      }, 'slow');
      $(content).animate({
        'margin-left':'14rem'
      }, 'slow');
    }
});

/*Show/hide messages*/
$(document).ready(function(){
    $(".successMessage").slideDown().delay(2000).slideUp();
});
$(document).ready(function(){
    $(".welcomeMessage").slideDown().delay(2000).slideUp();
});

 close_modal_warning.click(function(e) {
        e.preventDefault();
        modal_warning.toggle(500);
    });

/*client modals*/
open_modal_edit_client.click(function(e) {
    e.preventDefault();
    modal_edit_client.toggle(500);
});

close_modal_edit_client.click(function(e) {
    e.preventDefault();
    modal_edit_client.toggle(500);
});

open_modal_create_client.click(function(e) {
    e.preventDefault();
    modal_create_client.toggle(500);
});

close_modal_create_client.click(function(e) {
    e.preventDefault();
    modal_create_client.toggle(500);
});

/*Timber modals*/
open_modal_create_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_create_timber_incoming.toggle(500);
});

close_modal_create_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_create_timber_incoming.toggle(500);
});

open_modal_edit_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_edit_timber_incoming.toggle(500);
});

close_modal_edit_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_edit_timber_incoming.toggle(500);
});

/*Timber links*/
open_timber.click(function(e) {
    e.preventDefault();
    timber_links.toggle(300);
});

/*Drykiln modals*/
open_modal_create_drykiln.click(function(e) {
    e.preventDefault();
    modal_create_drykiln.toggle(500);
});

close_modal_create_drykiln.click(function(e) {
    e.preventDefault();
    modal_create_drykiln.toggle(500);
});

open_modal_create_drykiln_config.click(function(e) {
    e.preventDefault();
    modal_create_drykiln_config.toggle(500);
});

close_modal_create_drykiln_config.click(function(e) {
    e.preventDefault();
    modal_create_drykiln_config.toggle(500);
});

open_modal_edit_drykiln_config.click(function(e) {
    e.preventDefault();
    modal_edit_drykiln_config.toggle(500);
});

close_modal_edit_drykiln_config.click(function(e) {
    e.preventDefault();
    modal_edit_drykiln_config.toggle(500);
});

open_modal_create_drykiln_readings.click(function(e) {
    e.preventDefault();
    modal_create_drykiln_readings.toggle(500);
});

close_modal_create_drykiln_readings.click(function(e) {
    e.preventDefault();
    modal_create_drykiln_readings.toggle(500);
});


