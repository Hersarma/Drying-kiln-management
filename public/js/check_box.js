$('[type=checkbox]').click(function(){
    var checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
    }
    else
    {
        $('.trash').hide();
    }
});
$(".check_all").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
    var checkedChbx = $('[type=checkbox]:checked');
    if (checkedChbx.length > 0)
    {
        $('.trash').show();
    }
    else
    {
        $('.trash').hide();
    }
});