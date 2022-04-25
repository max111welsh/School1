<h1>route des étudiants</h1>
<ul>
    @foreach($étudiants as $étudiant)
        <li>{{$étudiant->id}}</li>
        <li>{{$étudiant->Nom}}</li>
        <li>{{$étudiant->Prénom}}</li>
        <li>{{$étudiant->code_étudiant}}</li>
    @endforeach
</ul>
