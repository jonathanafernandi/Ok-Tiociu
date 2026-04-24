<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td>
{{ Illuminate\Mail\Markdown::parse(
    str_replace(
        ["If you're having trouble clicking the \"Reset Kata Sandi\" button, copy and paste the URL below\ninto your web browser:", "If you're having trouble clicking the \"Reset Kata Sandi\" button, copy and paste the URL below into your web browser:"],
        'Jika kamu kesulitan mengklik tombol "Reset Kata Sandi", salin dan tempel tautan ini ke browser kamu:',
        (string) $slot
    )
) }}
{{-- {{ Illuminate\Mail\Markdown::parse($slot) }} --}}
</td>
</tr>
</table>
