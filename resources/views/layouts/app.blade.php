<!doctype html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Mi biografía')</title>
  <style>
  :root{
    --brand:#0a2540; 
  }
  body{
    margin:0;
    font-family:Montserrat, system-ui, Segoe UI, Roboto, Arial, sans-serif;
    font-size:17px; /* un poquito más grande */
  }
  header{
    background:var(--brand);
    color:#fff;
    padding:22px;
  }
  nav a{
    color:#fff;
    margin-right:14px;
    text-decoration:none;
    font-weight:600;
    font-size:15.5px; /* un toque más grande */
  }
  nav a:hover{ text-decoration:underline; }
  main{
    max-width:900px;
    margin:28px auto;
    padding:0 16px;
  }
  .card{
    background:#fff;
    border:1px solid #eee;
    border-radius:12px;
    padding:22px;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
  }
</style>
</head>
<body>
<header>
  <h1 style="margin:0;">Biografía</h1>
<nav>
  <a href="{{ route('bio.information') }}">Nombre</a>
  <a href="{{ route('bio.infancia') }}">Infancia</a>
  <a href="{{ route('bio.adolescencia') }}">Adolescencia</a>
  <a href="{{ route('bio.actualidad') }}">Actualidad</a>
  <a href="{{ route('bio.aspiraciones') }}">Futuro</a>
</nav>
</header>
<main><div class="card">@yield('content')</div></main>
</body>
</html>

