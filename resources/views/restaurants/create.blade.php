<form action="/restaurants/create" method="POST">

    @if ($errors->any())
<div>
<ul>
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
</ul>
</div>
@endif

    <div>
    <label for="name">Nom du restaurant</label>
    <input type="text" name="name" id="name">
</div>
<div>
    <label for="address">Adresse</label>
    <input type="text" name="address" id="address">
</div>
<div>
    <label for="zipCode">Code postal</label>
    <input type="number" name="zipCode" id="zipCode">
</div>
<div>
    <label for="town">Ville</label>
    <input type="text" name="town" id="town">
</div>
<div>
    <label for="country">Pays</label>
    <input type="text" name="country" id="country">
</div>
<div>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
</div>
<div>
    <label for="review">Note sur 10</label>
    <input type="number" name="review" id="review">
</div>

{{ @csrf_field() }}

<div>
    <input type="submit" value="Submit">
</div>
</form>