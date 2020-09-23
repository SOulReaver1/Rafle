@component('mail::message')
# Merci {{$firstname.' '.$lastname}}! Nous confirmons votre réservation pour la raffle ! Nous vous contacterons prochainement !

A bientot sur notre site !



Merci,<br>
{{ config('app.name') }}
@endcomponent
