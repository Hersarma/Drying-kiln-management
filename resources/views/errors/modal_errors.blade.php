@if(count($errors->create_incoming) > 0)
<script>
$(document).ready(function () {
$('.modal_create_incoming').show();
});
</script>
@elseif(count($errors->edit_incoming) > 0)
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
@endif