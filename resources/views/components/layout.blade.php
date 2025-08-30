<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link 
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap" 
    rel="stylesheet">
    {{-- استدعاء الملفات عبر Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <nav class="flex justify-between items-center p-4 bg-gray-800 text-white"  >
         
        <div>
            <a href="#">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
            </a>
        </div>
        <div class="flex space-x-6">
            <a href="#">Jobs</a>
            <a href="#">careers</a>  
            <a href="#">Salaries</a>  
            <a href="#">Companies</a>      
        </div>
        <div>
            @auth
              <div class="flex space-x-6">
            <a href="/job">Jobs</a>
            
        </div>
            @ENDAUTH

            @guest
  <div class="flex space-x-6">
            <a href="/register">Sign Up</a>
            <a href="/login">Login in</a>  
         
        </div>
            @ENDGUEST

        </div>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto mt-8">
        {{ $slot }}
    </div>
</body>

</html>
