@foreach($clients as $client)
<li class="get_client_id py-3 cursor-pointer hover:text-turquoise-light">
  {{ ucfirst($client->name) }}
  <input class="hidden" type="text" name="" value="{{ $client->id }}">
</li>
@endforeach