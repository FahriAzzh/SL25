<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Selamat Datang!', $name)
@endif
@endif

{{-- Intro Lines --}}
# @lang('You have successfully registered as a participant in Sonic Linguistic 2025! Alongside this email, we have sent your registration details and the regional selection guidelines. You can see the guidelines for[Lomba yang diikutin] here. Note that your submission token, provided under the registration details, will be used for the submission process. You can submit your answers through our website by accessing soniclinguistic.id which will be available on [tanggal]. You can only use the submission token once you receive the payment confirmation email. Before that please confirm your email with the link down below')

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
# @lang('In addition, don't forget to post Sonic Linguistic 2025 twibbon in your first instagram account. Please unprivate your account and keep the twibbon posted until [Close Regist]. You can access the twibbon here [link twibbon SL]!')

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Sincerely,')<br>
@lang('Sonic Linguistic 2025 Committee')
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "If you have problems using the \":actionText\" button, you can copy and paste\n".
    'this link to your browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>
