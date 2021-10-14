<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>

<body>
    {{-- Header --}}
    <header>
        <h1>Movies</h1>
    </header>
    {{-- Main --}}
    <main>
        <section id="movie">
            @forelse ($movies as $movie)
                <h2>Title: {{ $movie->title }}</h2>
                <h4>Original title: {{ $movie->original_title }}</h4>
                <div>Nationality: {{ $movie->nationality }}</div>
                <time>Date: {{ $movie->date }}</time>
                <div>Vote: {{ $movie->vote }}</div>
            @empty
                <h2>Nessun film trovato!</h2>
            @endforelse

        </section>
    </main>

</body>

</html>
