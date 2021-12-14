<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ public_path('pdf/css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ public_path('pdf/css/app.css') }}"/>

    <title>44</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;700&display=swap"
        rel="stylesheet"
    />
</head>

<body>
@include('pdf.components.footer')
@yield('content')

</body>
</html>
