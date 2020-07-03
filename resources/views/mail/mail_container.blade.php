@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}
{{$body}}
Thank you for choosing Averti Advisor!

Click below to start working right now
@component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent
Sincerely,  
Averti team.
@endcomponent