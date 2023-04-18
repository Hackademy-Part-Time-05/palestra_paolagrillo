<x-main>
    <div class="container mt-5">
        <h1>I miei articoli</h1>

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->author }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-main>