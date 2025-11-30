<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
  <header>
    <nav class="flex justify-around items-center text-l bg-white fixed top-0 left-0 right-0 shadow-md py-5 px-13">
      <h1>LOGO</h1>
      <ul class="flex items-center gap-11">
        <li><a href="/">Home</a></li>
        <li><a href="/players">Players</a></li>
        <li><a href="/about" class="btn">Add PLayer</a></li>
      </ul>
    </nav>  
  </header>

  <main>
    {{ $slot }}
  </main>
</body>
</html>