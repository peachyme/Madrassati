@component('mail::message')

Bonjour monsieur {{$info['nom']}} {{$info['prenom']}}, <br>
nous vous informons que votre candidature est mise en attente.

Cordialement,
La direction<br>

{{ config('app.name') }}
@endcomponent
