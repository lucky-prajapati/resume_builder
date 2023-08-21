<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title></title>
</head>
<body>
    <header class="navbar navbar-dark navbar-expand-xxl bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand p-3">Resume Builder</a>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>     
    <footer class="footer bg-dark text-white text-center p-3">
        <p>&copy;2022</p>
    </footer>
</body>
</html>