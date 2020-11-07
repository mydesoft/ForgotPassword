@component('mail::message')
# Reset Password

Please Reset Your Password by clicking the button belovw

@component('mail::button', ['url' => url('/reset/password', $tokenData->token).'?email='.urlencode($tokenData->email)])
	Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent