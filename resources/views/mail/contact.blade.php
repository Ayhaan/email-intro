{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

The body of your message.
{{ $mail->name }}
{{ $mail->mail }}
{{ $mail->message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
