@extends('index')

@section('content')
<form method="POST" action="{{ route('cadastrar.usuario') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Criar novo Usuario</h1>
        </div>
        <div class="mb-3">
          <label class="form-label">Nome do Usuario</label>
          <input type="text" value="{{ @old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror">
          @if ($errors->has('name'))
            <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
          @endif
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" value="{{ @old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
          @if ($errors->has('email'))
            <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
          @endif
        </div>
        <div class="mb-3">
          <label class="form-label">Senha</label>
          <input value="{{ @old('password') }}" type="password" name="password" class="form-control @error('password') is-invalid @enderror">
          @if ($errors->has('password'))
            <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
          @endif
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>      
    </form>
@endsection
