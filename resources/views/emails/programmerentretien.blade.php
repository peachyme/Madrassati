@component('mail::message')


Bonjour monsieur {{$info['nom']}} {{$info['prenom']}},
nous vous informons que vous avez un entretien le {{$info['date']}} à {{$info['heure']}} .

Cordialement,
La direction<br>
{{ config('app.name') }}
@endcomponent
