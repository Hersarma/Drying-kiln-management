$(document).ready(function () {

$(document).on('click', '[type=checkbox], .restore_checkbox', function(){

    let checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
        $('.restore_mail').show();
    }
    else
    {
        $('.trash').hide();
        $('.restore_mail').hide();
    }
});

$(document).on('click', '.check_all', function(){

    $('input:checkbox').not(this).prop('checked', this.checked);
    let checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
        $('.restore_mail').show();
    }
    else
    {
        $('.trash').hide();
        $('.restore_mail').hide();
    }
});

 $(document).on('click', '.delete_checked_mail_permanently', function () {
        let href = $(this).children('span').text();
       
       $('.submit_checked').attr('method', 'post');
        $('.submit_checked').attr('action', href);
        $('.modal_warning_delete_checked_permanently_mail').toggle(500);

});

    $(document).on('click', '.restore_mail', function () {
        let href = $(this).children('span').text();
       
       $('.submit_checked').attr('method', 'get');
        $('.submit_checked').attr('action', href);
        $('.modal_warning_restore_checked_mail').toggle(500);

});

    $(document).on('click', '.delete_checked_items', function(){
        $('.modal_warning_delete_checked_items').toggle(500);
    });

$(document).on('change', '.comma', function () {
        this.value = this.value.replace(/,/g, '.');
    });

});