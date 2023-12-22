@component('mail::message')

Bonjour monsieur {{$info['nom']}} {{$info['prenom']}}, <br>
nous vous informons que votre candidature est acceptée.

Cordialement,
La direction<br>

{{ config('app.name') }}
@endcomponent
