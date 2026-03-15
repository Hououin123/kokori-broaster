<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('titulo', 'Sistema')</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Sistema | IncanatoApps.com" />
    <meta name="author" content="IncanatoApps" />
    <meta
      name="description"
      content="Sistema."
    />
    <meta
      name="keywords"
      content="Sistema, IncanatoApps"
    />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-body-secondary">
      @yield('contenido')
  </body>
</html>
