<div class="card card-body shadow-2 mb-2">
    <div class="d-flex justify-content-between">
        <p>
            <span class="font-weight-bold mr-2">{{ $tweet->user->name }}</span>
            <span style="font-size: 0.8rem;">{{ $tweet->created_at }}</span>
        </p>
        <div class="d-flex" style="z-index:2">
            <a href="/tweets/{{$tweet->id}}/edit"  class="btn btn-floating shadow-0" >
                <i class="fas fa-edit fa-lg"></i>
            </a>
            <form action="/tweets/{{$tweet->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-floating shadow-0">
                    <i class="fas fa-trash fa-lg"></i>
                </button>
            </form>
        </div>
    </div>
    <p class="card-text">
        {{ $tweet->message }}
    </p>
    <div>
        @foreach($tweet->tags as $tag)
            <span class="badge badge-pill badge-primary">{{$tag->name}}</span>
        @endforeach
    </div>
</div>