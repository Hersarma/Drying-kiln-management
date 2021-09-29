let side_bar = $("#side_bar");
let hamburger_mobile = $('#hamburger_mobile');
let hamburger = $('#hamburger');
let user = $("#user_open");
let user_profile = $("#user_profile");
let content = $('#content');


/*User profile toogle*/

user.click(function(e) {
    e.preventDefault();
    user_profile.toggle(500);
});

/*Timber*/
let open_timber = $('.open_timber');
let timber_links = $('.timber_links');

let open_modal_create_timber_incoming = $(".open_modal_create_timber_incoming");
let close_modal_create_timber_incoming = $(".close_modal_create_timber_incoming");
let modal_create_timber_incoming = $(".modal_create_timber_incoming");

/*Client->create*/
let open_modal_create_client = $(".open_modal_create_client");
let close_modal_create_client = $(".close_modal_create_client");
let modal_create_client = $(".modal_create_client");

/*Client->edit*/
let open_modal_edit_client = $(".open_modal_edit_client");
let close_modal_edit_client = $(".close_modal_edit_client");
let modal_edit_client = $(".modal_edit_client");


/*Side bar toggle*/
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


open_modal_create_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_create_timber_incoming.toggle(500);
});

close_modal_create_timber_incoming.click(function(e) {
    e.preventDefault();
    modal_create_timber_incoming.toggle(500);
});

open_timber.click(function(e) {
    e.preventDefault();
    timber_links.toggle(300);
});


