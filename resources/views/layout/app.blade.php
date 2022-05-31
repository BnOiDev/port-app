<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfólio - Almeida</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="\img\avatarMenu.png">

	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
</head>

<body class="text-gray-800 dark:text-gray-200 ">

    {{-- Icone WhatsApp --}}
    <style>
		.whatsapp-link {
			position: fixed;
			width: 55px;
			height: 55px;
			bottom: 40px;
			right: 15px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 0px 1px 4px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}
	</style>

<a class="whatsapp-link" href="https://contate.me/bnoalmeida" target="_blank">
    <img id="menu" src="\img\whatsapp.svg " alt="logo" class="w-14"/>
</a>

    <div class="min-h-screen bg-white-100">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
