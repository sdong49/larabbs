@extends('layouts.app')

@section('content')

<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="mt-2 mb-2">
            @foreach ($errors->all() as $error)
            <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="col-md-8 offset-md-2">

    <div class="card" style="margin-top: 60px">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit">Modifier votre infortions personnelles </i>
        </h4>
      </div>

      <div class="card-body" >

        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8" >
          <input type="hidden" name="_method" value="PUT">
          @csrf

          <div class="form-group">
            <label for="name-field">Votre pseudo</label>
            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
          </div>
          <div class="form-group">
            <label for="email-field">Votre e-mail</label>
            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
          </div>
          {{-- <div class="form-group">
            <label for="email-field">Votre mot de passe</label>
            <input class="form-control" type="password" name="password" id="email-field" />
          </div> --}}
          <div class="form-group">
            <label for="introduction-field">Votre profil</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
          </div>
          <div class="form-group mb-4">
            <label for="" class="avatar-label">Votre image</label>
            <input type="file" name="avatar" class="form-control-file">

          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection