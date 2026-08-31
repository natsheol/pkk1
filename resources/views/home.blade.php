<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Agency</title>

    <link rel="stylesheet" href="{{ asset('css/agency.css') }}">
</head>

<body>

    @include('navbar')


    @include('sections.hero')
    @include('sections.about')
    @include('sections.services')
    @include('sections.teamprof')
    @include('sections.contact')


   @include('footer')

    

</body>


</html>