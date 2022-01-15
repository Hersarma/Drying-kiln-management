
	<div>
		@foreach($mail_inbox as $mail)
		<p class="text-white text-lg px-4 py-3">{{ $mail->from }}</p>
		@endforeach
	</div>
	<div class="py-4 px-4">
		{{ $mail_inbox->links() }}
	</div>
