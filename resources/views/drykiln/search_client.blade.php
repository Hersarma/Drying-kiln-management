@foreach($clients as $client)
<li class="get_client_name py-3 cursor-pointer hover:text-turquoise-light">
  {{ $client->name }}
</li>
@endforeach