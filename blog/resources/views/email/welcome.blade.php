@component('mail::message')
# Welcome
Congrats! You have successfully managed to create a mail for our blog!
თუ თქვენ ხართ ბატონი ლექტორი მაშინ მინდა მადლობა გადაგიხადოთ ჩვენი ლექტორობისთვის და რომ შეძელით ამდენი ინერტული სტუდენტის ატანა

პატივისცემით სესილი ლომაძე

პს მთელ დაბადების დღეს ამ პროექტს ვუთმობ, procrastination-იც სქილია
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
