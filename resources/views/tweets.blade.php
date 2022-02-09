<x-app-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                    <!-- 新規投稿フォーム ここから -->
                    <form action="/tweets" method="POST" class="card card-body shadow-2 mb-3">
                        @csrf
                        <div class="mb-2">
                            <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">ぼやいったー</p>
                            <div class="form-outline">
                                <textarea class="form-control" id="text-area" rows="3" name="message" placeholder="ぼやきを入力">{{old('message')}}</textarea>
                            </div>
                            @error('message')
                                <div class="form-helper text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <!-- タグづけ用選択チェックボックス ここから -->
                        <div class="mb-2">
                            <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">タグを選択</p>
                            <div class="form-outline mb-2">
                                @foreach($tags as $tag)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="tag-checkbox{{$tag->id}}" name="tags[]" value="{{$tag->id}}" />
                                        <label class="form-check-label" for="tag-checkbox2">{{$tag->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                         <!-- タグづけ用選択チェックボックス ここまで -->
                        <button
                            type="submit"
                            class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
                        >
                            ぼやきを投稿
                        </button>
                    </form>
                    <!-- 新規投稿フォーム ここまで -->
                    @foreach($tweets as $tweet)
                        <x-tweet-card :tweet="$tweet" />
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
