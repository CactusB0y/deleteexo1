<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Genre</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($femmes as $femme)
                <tr>
                    <th scope="row">{{$femme->id}}</th>
                    <td>{{$femme->nom}}</td>
                    <td>{{$femme->age}}</td>
                    <td>{{$femme->genre}}</td>
                    <td>
                        <form action="/delete-membre/{{$femme->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>