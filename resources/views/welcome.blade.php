<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CV - Melvin Tehubijuluw</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" />
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('pages.homepage.partials.header')
        @include('pages.homepage.partials.briefSummaryOfSkills')
        @include('pages.homepage.partials.aboutMe')
        @include('pages.homepage.partials.portfolio')
    </body>
</html>
