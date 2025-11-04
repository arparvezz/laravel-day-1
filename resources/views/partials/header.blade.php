<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <div class="container mx-auto py-2 border-b border-b-gray-200">
        <header class="flex flex-row justify-between items-center">
            <a href="#" class="bg-blue-100 text-blue-500 px-3 py-1 rounded">Logo</a>
            <nav>
                <ul class="flex flex-row gap-5">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <button class="bg-blue-600 text-blue-100 px-4 py-2 rounded">Contact Now</button>
        </header>
    </div>

    <main class="h-screen">
        @yield('main_content')
    </main>


    <footer class="bg-black text-white p-2">
        <p class="text-center">Copyright &copy; All right reserved.</p>
    </footer>
    
  </body>
</html>