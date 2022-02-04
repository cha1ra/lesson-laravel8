<x-app-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                <form action="/tweets/{{$tweet->id}}" method="POST" class="card card-body shadow-2 mb-1">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">ぼやいったー</p>
                        <div class="form-outline">
                            <textarea class="form-control" id="text-area" rows="3" name="message" placeholder="ぼやきを入力">{{ $tweet->message }}</textarea>
                        </div>
                    </div>
                    <!-- タグづけ用 -->
                    <div class="mb-2">
                        <p class="mb-1 text-gray-400 font-weight-bold" style="font-size: 0.8rem;">タグを選択</p>
                        <div class="form-outline mb-2">
                            @foreach($tags as $tag)
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="tag-checkbox{{$tag->id}}"
                                        name="tags[]"
                                        value="{{$tag->id}}"
                                        {{  (in_array($tag->id, $selectedTags)) ?'checked':'' }}
                                    />
                                    <label class="form-check-label" for="tag-checkbox2">{{$tag->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('tweets.index') }}" class="btn btn-dark btn-block shadow-0 mr-2">キャンセル</a>
                        <button type="submit" class="btn btn-primary btn-block shadow-0 mt-0 ml-2">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
