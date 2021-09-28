@if(count($errors->create_product) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_product').show();
        });
    </script>
@elseif(count($errors->edit_product) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_edit_product').show();
        });
    </script>
@elseif(count($errors->create_driver) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_driver').show();
        });
    </script>
@elseif(count($errors->edit_driver) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_edit_driver').show();
        });
    </script>
@elseif(count($errors->create_vehicle) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_vehicle').show();
        });
    </script>
@elseif(count($errors->edit_vehicle) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_edit_vehicle').show();
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
@elseif(count($errors->create_category) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_category').show();
        });
    </script>
@elseif(count($errors->create_fuel_record) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_fuel_record').show();
        });
    </script>
@elseif(count($errors->edit_fuel_card) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_edit_fuel_card').show();
        });
    </script>
@elseif(count($errors->create_fuel_record) > 0)
    <script>
        $(document).ready(function () {
            $('.modal_create_fuel_record').show();
        });
    </script>
@endif
