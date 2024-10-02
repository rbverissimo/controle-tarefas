@component('mail::message')
# Introdução

corpo da mensagem

@component('mail::button', ['url' => ''])
Ok
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
