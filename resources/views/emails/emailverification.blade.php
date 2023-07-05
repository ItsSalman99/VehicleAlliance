@component('mail::message')
    # Account Verification

    Hello, Dear {{ $data['name'] }}! please verify your account by clicking this buttono.


    @component('mail::button', ['url' => $data['url']])
        Verify
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
