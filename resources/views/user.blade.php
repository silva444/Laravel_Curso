
<h1>
    Ola vincus
    <br>
    {{ $name }}
    <br>
    {{ date('d/m/y')}}

    <br>

   
</h1>

@php
    $total = 0;
 @endphp

     @empty($total)  <!-- // se estiver vazio mostre issso; -->
        Ola
    @endempty

     @if($total == 1001) <!-- diretiva blade  // da para usar no html-->
     verdadeiro
     @elseif($total == 2)
     bbarato
    @endif

