@if(session('message_send_mail_warning'))
<div class="message_send_mail_warning hidden w-2/3 mx-auto text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex justify-center">
    <p>
    <i class="fas fa-times text-red-500" aria-hidden="true">  
    </i>
    <p class="px-4">{{ session('message_send_mail_warning') }}</p>
    </p>
  </div>
  <a href="{{ route('mail_config_show') }}" class="text-gray-200 text-xl font-bold mt-5">Proverite podesavanja</a>
</div>




<script>
  $(document).ready(function(){
    $(".message_send_mail_warning").slideDown();
});
</script>
@endif