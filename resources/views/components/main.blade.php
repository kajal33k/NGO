<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGO</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('asset/css/script.css')}}">
<script src="{{asset('asset/js/main.js')}}"></script>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>


</head>
<body class="bg-gray-50">
  
@include('components.header')
@yield('content')
@include('components.footer')

</body>
</html>