<h1>Ajouter un employer</h1>
<form action="/employers" method="POST">
    @csrf
    <label for="nom_employer">Nom</label>
    <input id="nom_employer" type="text" name="nom" value="{{old('nom')}}">
    <label for="age_employer">Age</label>
    <input id="age_employer" type="number" name="age" value="{{old('age')}}">
    <button type="submit">Yeah envoyer !</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
