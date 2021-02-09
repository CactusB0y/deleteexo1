<div class="container mt-5">
    <a href="/">retour a l'accueil</a>
    <form action="/membre-store" method="post">
        @csrf
        <label for=""> Nom
            <input type="text" name="nom" id="">
        </label>
        <label for=""> Age
            <input type="number" name="age" id="">
        </label>
        <label for=""> Genre
            <input type="text" name="genre">
        </label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>