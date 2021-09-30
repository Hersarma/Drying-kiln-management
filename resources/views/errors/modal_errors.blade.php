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
@endif
