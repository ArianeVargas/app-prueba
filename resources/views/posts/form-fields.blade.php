<label for="">titulo <br>
    <input name="title" type="text" value="{{ old('tilte', $post->title) }}">
    @error('title')
    <br>
        <small style="color:blue">{{ $message }}</small>
    @enderror
</label><br>

<label for="">Body<br>
    <textarea name="body">{{old('body', $post->body)}}</textarea>
    @error('body')
    <br>
        <small style="color:blue">{{ $message }}</small>
    @enderror
</label><br>
