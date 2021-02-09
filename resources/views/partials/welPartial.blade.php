<div class="container mt-5">
    <a href="/create">Rajouter un membre</a>
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
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{$membre->id}}</th>
                    <td>{{$membre->nom}}</td>
                    <td>{{$membre->age}}</td>
                    <td>{{$membre->genre}}</td>
                    <td>
                        <form action="/delete-membre/{{$membre->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>