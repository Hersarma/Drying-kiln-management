@if(session('message_mail_error'))
<div class="message_mail_error w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true">  
    </i>
    <p class="px-4">{{ session('message_mail_error') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".message_mail_error").slideDown();
});
</script>
@endif