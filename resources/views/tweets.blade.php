<x-app-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                    @foreach($tweets as $tweet)
                        <x-tweet-card :tweet="$tweet" />
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
