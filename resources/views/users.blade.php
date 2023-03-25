@extends('layouts.default') 
{{-- exteda a pasta que tem o arquivo default --}}

{{-- se não tive titulo é colocado o padrão --}}

@section('title', 'User Titulo') 

{{-- posso sobrescrever aqui o sider bar --}}
@section('sidebar')
<div>
    <nav>
        sidebar sobresscrito
    </nav>
</div>
@endsection

@section('content')
    

<h1>Ola</h1>

@endsection

{{-- @foreach( $name as $name) 
  {{$name->name }}
@endforeach  --}}

<!-- é o contrario do if -->
{{-- @unless
@endunless   --}}


{{-- uso issso para adicionar o link de script no local correto --}}
@push('scripts')
<script src="{{asset('/js/user.js')}}"></script>
@endpush
{{-- esse link para para o topo da pilha --}}
@prepend('scripts')

<script src="{{asset('/js/user.js')}}"></script>
    
@prepend
