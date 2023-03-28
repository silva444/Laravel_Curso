@extends('layouts.default')


@section('sidebar')
@endsection
{{-- {{print_r($errors)}}
<br> --}}


{{-- se existi erros --}}
@if ($errors->any())
    @foreach ($errors->all() as $erro)
        {{ $erro }}
    @endforeach 
    <br> <br> <br>
@endif

@section('content')


    <form enctype="multipart/form-data" method="POST" action="{{ route('bunises.store') }}">
        @csrf
        {{-- o token  --}}
        {{-- tem que usar para não da erro ao fazer o submit --}}
        <Label>Nome</Label>
        <input type="text" name="name" id="name_id" value="{{old('name')}}"> 
        {{-- old = sserve para não perde o valor quando dar eero 
            para não fica preenchendo o que já fi preenchido antes --}}
        @error('name')
            {{ $message }}
        @enderror
        {{-- <br>
        <Label>Email</Label>
        <input type="text" name="email" id="email_id" value="{{old('email')}}">
        @error('email')
            {{ $message }}
        @enderror
        <br> --}}
        <br>
        <Label>Upload</Label>
        <input type="file" name="logo">
        <br>
        <button type="submit">Salvar</button>
    </form>

    <hr>


    @foreach ($bunises as $buni)

    @if($buni->logo)

    <img src="{{ Storage::disk('public')->url($buni->logo)}}" alt="" width="100">

    {{ Storage::disk('public')->url($buni->logo)}}
    @endif
    {{$buni->name}} - {{$buni->logo}}


    <br>
    @endforeach
    {{-- {{dd($bunises)}} --}}

    {{-- mostra os outros registros em outras paginas  --}}
    
    {{$bunises->links()}} 
       
    @endsection
