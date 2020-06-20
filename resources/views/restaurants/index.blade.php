@foreach($restaurant as $restaurant)
    <h2>{{ $restaurant->name }}</h2>
    <h4><i>{{ $restaurant->description }}</i></h4>
    <p>{{ $restaurant->address }}</p>
    <p>{{ $restaurant->zipCode }}</p>
    <p>{{ $restaurant->town }}</p>
    <p>{{ $restaurant->country }}</p>
    <p>Ce restaurant a une note de {{ $restaurant->review }} sur 10</p>
@endforeach