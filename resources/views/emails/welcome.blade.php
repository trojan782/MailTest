@component('mail::message')
# New User Alert ‼️

A New user has just joined Use-ers

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
