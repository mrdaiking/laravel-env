<form action="{{ route('baiviet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title"/>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div>
        <label for="content">Noi dung</label>
        <br>
        <textarea cols="25" rows="8" name="content"></textarea>
    </div>
    <div>
        <button type="submit">Dang bai</button>
    </div>
</form>
