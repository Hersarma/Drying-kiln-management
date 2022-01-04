$(document).ready(function () {

$(document).on('click', '[type=checkbox]', function(){

    let checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
    }
    else
    {
        $('.trash').hide();
    }
});

$(document).on('click', '.check_all', function(){

    $('input:checkbox').not(this).prop('checked', this.checked);
    let checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
    }
    else
    {
        $('.trash').hide();
    }
});


$(document).on('change', '.comma', function () {
        this.value = this.value.replace(/,/g, '.');
    });

});