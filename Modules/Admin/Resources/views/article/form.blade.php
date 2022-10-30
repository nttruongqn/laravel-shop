<form action="" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="form-group">
        <label for="a_name">Tên Bài Viết</label>
        <input type="text" class="form-control" name="a_name" id="a_name"
            value="{{ old('a_name', isset($article->a_name) ? $article->a_name : '') }}"
            placeholder="Nhập tên bài viết  ">
        @if ($errors->has('a_name'))
            <div class="error-text">
                {{ $errors->first('a_name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="a_description">Mô tả</label>
        <textarea class="form-control" name="a_description" id="" cols="30" rows="10"
            placeholder="Mô tả bài viết">{{ old('a_description', isset($article->a_description) ? $article->a_description : '') }}</textarea>
        @if ($errors->has('a_description'))
            <div class="error-text">
                {{ $errors->first('a_description') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="a_content">Nội dung</label>
        <textarea class="form-control" name="a_content" id="" cols="30" rows="10"
            placeholder="Nội dung bài viết">{{ old('a_content', isset($article->a_content) ? $article->a_content : '') }}</textarea>
        @if ($errors->has('a_content'))
            <div class="error-text">
                {{ $errors->first('a_content') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="a_title_seo">Meta Title</label>
        <input type="text" class="form-control" name="a_title_seo" id="a_title_seo"
            value="{{ old('a_title_seo', isset($article->a_title_seo) ? $article->a_title_seo : '') }}"
            placeholder="Meta Title">

    </div>
    <div class="form-group">
        <label for="a_description_seo">Meta Description</label>
        <input type="text" class="form-control" name="a_description_seo" id="a_description_seo"
            value="{{ old('a_description_seo', isset($article->a_description_seo) ? $article->a_description_seo : '') }}"
            placeholder="Meta Description">
    </div>

    <div class="form-group">
        <label for="a_avatar">Avatar</label>
        <input type="file" class="form-control" name="a_avatar" id="a_avatar">
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1" name="hot">Nổi bật</label>
    </div>


    <button type="submit" class="btn btn-save btn-secondary mt-2">Lưu thông tin</button>
</form>
