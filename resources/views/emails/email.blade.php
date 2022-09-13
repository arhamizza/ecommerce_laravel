@component('mail::message')
# Terima Kasih Sudah mengunjungi Situs Kami 

Silahkan verifikasi email

@component('mail::button', ['url' => ''])
OK
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
