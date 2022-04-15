@component('mail::message')
# Introduction

Hello {{$data["agent"]}}, <br /> New deal received, you can view/update the DEAL using the button below.

@component('mail::button', ['url' => 'https://suntextgroup.com.ng/deal/b/'.$data["deal_id"]])
VIEW DEAL
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent



