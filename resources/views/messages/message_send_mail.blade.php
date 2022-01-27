@if(session('message_send_mail_warning'))
<div class="message_send_mail_warning hidden w-2/3 mx-auto mb-5 text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="w-full">
    <p>
      <i class="fas fa-times text-red-500 fa-lg px-4" aria-hidden="true">
    </i>
    </p>
    <p class="px-4 text-center">{{ session('message_send_mail_warning') }}</p>
    </p>
  </div>
  <div class="flex justify-between items-center mt-12 px-8 h-8">
            <button type="" class="close_message_send_mail_warning transition ease-out duration-500 transform hover:scale-110 py-2 px-4 ml-4 border border-transparent text-sm leading-5 font-medium rounded-md text-black bg-gray-300 hover:bg-gray-400 focus:outline-none">Zatvori</button>
            <a href="{{ route('mail_config_show') }}">
              <button type="button" class="transition ease-out duration-500 transform hover:scale-110 py-2 px-4 mr-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-turquoise-medium hover:bg-turquoise-strong focus:outline-none">Proverite imejl konfig</button>
            </a>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".message_send_mail_warning").slideDown();
    $(document).on('click', '.close_message_send_mail_warning', function(e){
    e.preventDefault();
    $('.message_send_mail_warning').slideUp();
});
});
</script>
@endif