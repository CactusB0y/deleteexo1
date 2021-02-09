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
            @foreach ($hommes as $homme)
                <tr>
                    <th scope="row">{{$homme->id}}</th>
                    <td>{{$homme->nom}}</td>
                    <td>{{$homme->age}}</td>
                    <td>{{$homme->genre}}</td>
                    <td>
                        <form action="/delete-membre/{{$homme->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>