@component('mail::message')
# Reminder

The deadline is exceeded !!!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
