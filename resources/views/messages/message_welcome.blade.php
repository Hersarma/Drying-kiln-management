@if(session('message'))
  <div class="successMessage hidden z-50 absolute top-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-200 px-4 py-6 bg-gray-900 border-l-4 rounded-xl border-turquoise-light">
    <div class="flex">
    <p>{{ session('message') }}</p>
    <p><i class="fa fa-check text-green-500 px-2" aria-hidden="true"></i>
    </p>
    </div>
    
    
  </div>


@endif