<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>domain-@yield('title','')</title> 
    {{-- if user send title show title else print nothing --}}
   <link rel="stylesheet" href="{{asset('css/style.css ')}}">
   <link rel="stylesheet" href="{{asset('js/example.js ')}}">
 @stack('style')
 @stack('scripts')
</head>

<body>

    <header>
        @section('top_content')
        {{-- user send own message from post.blabe.php using @section('top_content ') only in postpage --}}

        <h1>Your Website</h1>
        @show
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/post">Post</a>
    </nav>

   <main>
    <article>
        @hasSection('content')
        @yield('content')
        @else
        <h2>No Content Found</h2>
            
        @endif
        {{-- if there is contant in section and send to yield en sjow contend 
            else shwo no content found --}}
    </article>
   </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

</body>

</html>
