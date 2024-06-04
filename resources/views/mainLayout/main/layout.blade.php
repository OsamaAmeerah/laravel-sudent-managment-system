<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('mainLayout.partial.style')
    <title>Student Managment</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('mainLayout.partial.nav')
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                @include('mainLayout.partial.sideBar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
