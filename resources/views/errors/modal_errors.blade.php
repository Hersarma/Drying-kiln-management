@if(count($errors->create_timber_incoming) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_timber_incoming').show();
        });
    </script>
@elseif(count($errors->edit_timber_incoming) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_edit_timber_incoming').show();
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
@endif
