@if(session('message'))
<div class="successMessage hidden z-50 absolute top-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-200 px-4 py-4 bg-gray-900 border-l-4 rounded-xl border-teal-400">
  <div class="flex">
    <p><i class="fa fa-check text-green-500" aria-hidden="true"></i>
      <p class="px-4">{{ session('message') }}</p>
    </p>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(".successMessage").slideDown().delay(3000).slideUp();
});
</script>
@endif