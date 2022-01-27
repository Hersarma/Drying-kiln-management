@if(session('loginMessage'))
<div class="welcomeMessage hidden z-50 absolute top-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
  <div class="flex">
      <p class="px-4">{{ session('loginMessage') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".welcomeMessage").slideDown().delay(3000).slideUp();
});
</script>
@endif