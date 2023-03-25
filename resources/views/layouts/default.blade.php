<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- utilizando o asset não preciso colocar localhost e se mudar muda automaticamente --}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>@yield('title' , 'Meu titulo')</title>
</head>
<body>

    <h1> Meu Layout</h1>
    {{-- se eu quiser passar um html como padrão  --}}
    @section('sidebar') 
       <div>
        <nav>
         {{-- esse é o valor padrão que é utilizado caso não tenha um valor especificado no Users.blade.php --}}
            sidebar1
        </nav>
       </div>
    @show
    {{-- fecho a diretiva com show --}}

    @yield('content'){{-- para utiliazar o layout, serve para imprimir o conteudo de uma sessão  --}}

    <script src="{{asset('/js/app.js')}}"></script>
    {{-- para adicionar um script numa pagina especifica , no local correto --}}
    @stack('scripts')
     {{--o script que esta em users sem para essa exatamnete esse local
        pois ele pode depender do script de cima  --}}
    
</body>
</html>