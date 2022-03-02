@if(count($errors->create_incoming) || count($errors->create_incoming_items) > 0)
<script>
$(document).ready(function () {
$('.modal_create_incoming').show();
});
</script>
@elseif(count($errors->edit_incoming) || count($errors->edit_incoming_items) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_incoming').show();
});
</script>
@elseif(count($errors->create_outgoing) > 0)
<script>
$(document).ready(function () {
$('.modal_create_outgoing').show();
});
</script>
@elseif(count($errors->edit_outgoing) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_outgoing').show();
});
</script>
@elseif(count($errors->create_client) > 0)
<script>
$(document).ready(function () {
$('.modal_create_client').show();
});
</script>
@elseif(count($errors->edit_client) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_client').show();
});
</script>
@elseif(count($errors->create_drykiln) > 0)
<script>
$(document).ready(function () {
$('.modal_create_drykiln').show();
});
</script>
@elseif(count($errors->edit_drykiln) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_drykiln').show();
});
</script>
@elseif(count($errors->create_drykiln_config) > 0)
<script>
$(document).ready(function () {
$('.modal_create_drykiln_config').show();
});
</script>
@elseif(count($errors->edit_drykiln_config) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_drykiln_config').show();
});
</script>
@elseif(count($errors->create_drykiln_readings) > 0)
<script>
$(document).ready(function () {
$('.modal_create_drykiln_readings').show();
});
</script>
@elseif(count($errors->edit_drykiln_readings) > 0)
<script>
$(document).ready(function () {
$('.modal_edit_drykiln_readings').show();
});
</script>
@elseif(count($errors->create_mail_incoming_config) > 0 || session('test_mail_connection_incoming_create'))
<script>
$(document).ready(function () {
$('.modal_create_mail_incoming').show();
});
</script>
@elseif(count($errors->edit_mail_incoming_config) > 0 || session('test_mail_connection_incoming_update'))
<script>
$(document).ready(function () {
$('.modal_edit_mail_incoming').show();
});
</script>
@elseif(count($errors->create_mail_outgoing_config) > 0 || session('test_mail_connection_outgoing_create'))
<script>
$(document).ready(function () {
$('.modal_create_mail_outgoing').show();
});
</script>
@elseif(count($errors->edit_mail_outgoing_config) > 0 || session('test_mail_connection_outgoing_update'))
<script>
$(document).ready(function () {
$('.modal_edit_mail_outgoing').show();
});
</script>
@elseif(count($errors->create_user) > 0)
<script>
$(document).ready(function() {
	$('.modal_create_user').show();
});
</script>
@elseif(count($errors->edit_user) > 0)
<script>
$(document).ready(function() {
	$('.modal_edit_user').show();
});
</script>
@endif