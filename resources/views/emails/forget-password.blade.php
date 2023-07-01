@component('mail::message')
# Reset Your Password - OTP Verification

Hello, your reset password otp for account on {{ $data['email'] }} is given below,
please use it to change your password.

@component('mail::button', ['url' => ''])
{{ $data['otp'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
