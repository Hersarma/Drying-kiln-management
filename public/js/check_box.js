$(document).ready(function () {

$('[type=checkbox]').click(function(){
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
$(".check_all").click(function () {
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
});

