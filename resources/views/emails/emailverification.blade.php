@component('mail::message')
    # Account Verification

    Hello, Dear {{ $data['name'] }}! please verify your account by clicking this buttono.

    @component('mail::button', ['url' => '{{route('verifyAccount', ['id' => $data['id']])}}'])
        Verify
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
