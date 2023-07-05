@component('mail::message')
# Your Order Has Been {{ $data['status'] }}

Hello, dear {{ $data['name'] }}! We recieved your order of follwing details.

Here are the details of your order:

| Product         | Price      |
|:-------------:|:------------:|
@foreach ($data['order_items'] as $item)
| {{ $item->product->name }} | ${{ $item->price }} |
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
