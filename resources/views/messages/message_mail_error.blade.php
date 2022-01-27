@if(session('test_mail_connection_incoming_create'))
<div class="test_mail_connection_create hidden w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true">  
    </i>
    <p class="px-4">{{ session('test_mail_connection_incoming_create') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".test_mail_connection_create").slideDown();
});
</script>
@elseif(session('test_mail_connection_incoming_update'))
<div class="test_mail_connection_update hidden w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true">  
    </i>
    <p class="px-4">{{ session('test_mail_connection_incoming_update') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".test_mail_connection_update").slideDown();
});
</script>
@endif