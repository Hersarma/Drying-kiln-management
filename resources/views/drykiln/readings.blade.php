@foreach($readings as $reading)
        <div class="group flex justify-between items-center md:px-4">
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_1 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_2 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_3 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_4 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_5 ?: '/'}}
          </p>
          <p class="w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->moisture_probe_6 ?: '/'}}
          </p>
          <p class="hidden md:block lg:block w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ $reading->created_at->format('d-m-Y H:i') }}
          </p>
          <p class="md:hidden lg:hidden w-1/7 py-3 tracking-wider text-gray-100 text-sm text-center group-hover:text-teal-600">
            {{ Str::limit($reading->created_at->format('d. F'), 7, $end='') }}
          </p>
        </div>
        @endforeach
        <div class="px-4 py-2">
      	{{ $readings->links() }}
      	</div>