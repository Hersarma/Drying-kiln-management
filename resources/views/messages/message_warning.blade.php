@if(session('message_warning'))
<div class="warningMessage hidden z-50 absolute top-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex">
    <p><i class="fas fa-times text-red-500" aria-hidden="true"></i>
      <p class="px-4">{{ session('message_warning') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".warningMessage").slideDown().delay(2000).slideUp();
});
</script>
@endif