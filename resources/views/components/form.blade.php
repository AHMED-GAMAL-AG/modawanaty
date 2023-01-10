    @csrf {{-- @csrf will talk about it later --}}
    <div class="form-group">
        <label for="title">عنوان المقالة</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? ""}}">
        {{-- if post title empty then '' --}}
    </div>

    <div class="form-group">
        <label for="body">نص المقالة</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body ?? ""}}</textarea>
    </div>

    <div class="form-group">
        <label for="author">كاتب المقالة</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? ""}}">
    </div>

