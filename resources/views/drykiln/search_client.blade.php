@foreach($clients as $client)
<li class="get_client_name py-3 cursor-pointer hover:text-teal-400">
  {{ ucfirst($client->name) }}
</li>
@endforeach