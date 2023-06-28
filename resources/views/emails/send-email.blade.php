@component('mail::message')
# {{ $data['title'] }}

{{ $data['para'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
