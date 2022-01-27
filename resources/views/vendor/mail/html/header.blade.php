<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://hersarma.in.rs/img/europalete-logo-black_teal.png" class="logo" alt="Europalete logo">
{{ $slot }}
@endif
</a>
</td>
</tr>
