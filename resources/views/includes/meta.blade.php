<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<link rel="icon" href="{{ asset('logo.png') }}">
<title>
    @yield('title')
    {{ config('app.name') }}
</title>
@include('meta::manager', [
    'title'         => 'Payroll Apps',
    'description'   => 'Payroll Apps Laravel 8',
    'image'         => 'Url to the image',
])