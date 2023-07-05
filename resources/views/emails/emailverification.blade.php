@component('mail::message')
    # Account Verification

    Hello, Dear {{ $data['name'] }}! please verify your account by clicking this buttono.

    @php
        $id = $data['id'];
    @endphp

    @component('mail::button', ['url' => '/verified/' . $id])
        Verify
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
