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


$(document).on('change', '.comma', function () {
        this.value = this.value.replace(/,/g, '.');
    });

});