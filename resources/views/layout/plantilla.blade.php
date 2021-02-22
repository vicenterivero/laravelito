<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href={{ asset('css/animate.css')}}>
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css')}}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css')}}>
        <link rel="stylesheet" href={{ asset('css/magnific-popup.css')}}>
        <link rel="stylesheet" href={{ asset('css/bootstrap-datepicker.css')}}>
        <link rel="stylesheet" href={{ asset('css/jquery.timepicker.css')}}>
        <link rel="stylesheet" href={{ asset('css/flaticon.css')}}>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         <tittle>@yield('titulo')</tittle>

    </head>

    <body>



    @yield('contenido')




    </body>
</html>
