@component('mail::message')
# {{ $data['title'] }}

Hello, dear {{ $data['name'] }}! We recieved your order of follwing details.

Order Status: {{ $data['status'] }}


Here are the details of your order:

| Product         | Price      |
|:-------------:|:------------:|
@foreach ($data['order_items'] as $item)
| {{ $item->product->name }} | ${{ $item->price }} |
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
