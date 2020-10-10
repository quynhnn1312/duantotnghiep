@component('mail::message')
    Hello {{ $email }}!
    Click the button below to get back your account!
    <br>
    @component('mail::button', ['url' => route('index', $token)])
        Get back your account
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
