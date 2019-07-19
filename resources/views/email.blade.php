@component('mail::message')
{{$sub}}
{{$dmsg}}
{{$file}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ 'ASAD'}}
@endcomponent
