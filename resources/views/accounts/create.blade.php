@extends('layout.main')

@section('content')

    <h3>New Account</h3>
    <form method="POST" action="#" >
        @csrf
        <div class="form-group">
            <label>solde</label>
            <input class="form-control" type="number" name="solde">
        </div>
        @error('solde')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="" class="control-label">Client</label>
            <select name="client_id" id="">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="" class="control-label">Type de Compte</label>
            <select name="type_account" id=""></select>
        </div>
        <button class="btn btn-success mt-3" type="submit">Enregistrer</button>
    </form>
@endsection
