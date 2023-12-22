@component('mail::message')

Bonjour monsieur {{$info['nom']}} {{$info['prenom']}}, <br>
Malheuseument, nous vous informons que votre candidature a été refusée pour le Motif suivant. <br>
{{$info['motif']}}

Cordialement,
La direction<br>

{{ config('app.name') }}
@endcomponent
