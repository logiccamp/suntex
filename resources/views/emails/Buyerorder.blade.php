@component('mail::message')
# Introduction

Hello {{$data["buyer"]}}, <br /> Your order has been confirmed, while you await the agent call, you can view the order using the link below.

@component('mail::button', ['url' => 'https://suntextgroup.com.ng/deal/b/'.$data["deal_id"]])
VIEW DEAL
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent



