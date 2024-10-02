@component('mail::message')
# Introdução

corpo da mensagem

- Opção 1
- Opção 2

@component('mail::button', ['url' => ''])
Ok
@endcomponent


@component('mail::button', ['url' => ''])
Não ok
@endcomponent


Obrigado,<br>
{{ config('app.name') }}
@endcomponent
