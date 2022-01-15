@if($mail_inbox->isNotEmpty())
<div class="w-full h-screen_nav ml-24 md:ml-52 border-l-4 border-turquoise-light rounded-xl">
	<div>
		@foreach($mail_inbox as $mail)
		<p class="text-white text-lg px-4 py-3">{{ $mail->from }}</p>
		@endforeach
		
	</div>
	<div class="">
		{{ $mail_inbox->links() }}
	</div>

</div>

@else
<div class="flex items-center justify-center w-full h-screen_nav ml-24 md:ml-52 border-l-4 border-turquoise-light rounded-xl">
		<div>
		<p class="text-white text-xl font-bold text-center py-4">Nema poruka</p>
		<div id="show_message" class="opacity-50">
      <img class="h-24 w-36 md:h-48 md:w-72" src="/img/mail.png" alt="Mail logo">
     </div>
	</div>
</div>
@endif