<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Fonte do Google --}}

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- CSS Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    {{-- CSS da aplicação --}}

    <link rel="stylesheet" href="/css/styles.css">

    {{-- Script jQuery --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

    {{-- Layout padrão para utilização nas páginas --}}

</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
          <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
  <footer class="fixed-bottom">
      <p>W3SFX PRODUCTS &copy; 2021</p>
  </footer>

  {{-- Script de Ícones --}}

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  
</body>
</html>