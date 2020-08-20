@extends('front.layout')
@section('content')
<div class="container" style="text-align: center;">
    <h1 class="title">İletişim Sayfası</h1>
    <ul class="contact-list">
        @if (isset($phone->settings_content))
        <i class="fas fa-phone contact-item m-2"></i>
        {{$phone->settings_content}}
        @endif
        @if (isset($cellphone->settings_content))
            <i class="fas fa-mobile-alt contact-item m-2"></i>
            {{$cellphone->settings_content}}
        @endif
       
    </ul>
    <h1>Adresimiz</h1>
    @if (isset($address->settings_content))
         {{$address->settings_content}}
    @endif
    <iframe class="my-5 embed-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.696972833496!2d35.32359361529535!3d36.993165779909305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f683e8b40f3%3A0x12844e9bc6da933b!2zUmXFn2F0YmV5LCBBZGFuYSBCw7x5w7xrxZ9laGlyIEJlbGVkaXllc2ksIDAxMTIwIFNleWhhbi9BZGFuYQ!5e0!3m2!1str!2str!4v1596542917349!5m2!1str!2str" width="1200" height="450" frameborder="1" style="border:2;" allowfullscreen="" aria-hidden="false" tabindex="5"></iframe>
</div>
@endsection