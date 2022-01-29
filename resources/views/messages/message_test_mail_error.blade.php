@if(session('test_mail_connection_outgoing_create'))
<div class="test_mail_connection_outgoing_create hidden w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true"></i>
    <p class="px-4">{{ session('test_mail_connection_outgoing_create') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".test_mail_connection_outgoing_create").slideDown();
});
</script>
@elseif(session('test_mail_connection_outgoing_update'))
<div class="test_mail_connection_outgoing_update hidden w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true">  
    </i>
    <p class="px-4">{{ session('test_mail_connection_outgoing_update') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".test_mail_connection_outgoing_update").slideDown();
});
</script>
@endif