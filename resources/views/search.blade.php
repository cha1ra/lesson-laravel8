<x-app-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                @if($tweets->count() === 0)
                    <p>検索結果がありませんでした</p>
                @else
                    <p>{{ $tweets->count() }} 件の結果が見つかりました</p>
                    @foreach($tweets as $tweet)
                        <x-tweet-card :tweet="$tweet" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
