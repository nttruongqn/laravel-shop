<form action="" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="form-group">
        <label for="c_name">Tên Danh Mục</label>
        <input type="text" class="form-control" name="c_name" id="c_name"
            value="{{ old('c_name', isset($category->c_name) ? $category->c_name : '') }}"
            placeholder="Nhập tên danh mục">
        @if ($errors->has('c_name'))
            <div class="error-text">
                {{ $errors->first('c_name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="c_icon">Icon</label>
        <input type="text" class="form-control" name="c_icon" id="c_icon"
            value="{{ old('c_icon', isset($category->c_icon) ? $category->c_icon : '') }}" placeholder="fa fa-home">
        @if ($errors->has('c_icon'))
            <div class="error-text">
                {{ $errors->first('c_icon') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="c_title_seo">Meta Title</label>
        <input type="text" class="form-control" name="c_title_seo" id="c_title_seo"
            value="{{ old('c_title_seo', isset($category->c_title_seo) ? $category->c_title_seo : '') }}"
            placeholder="Meta Title">

    </div>
    <div class="form-group">
        <label for="c_description_seo">Meta Description</label>
        <input type="text" class="form-control" name="c_description_seo" id="c_description_seo"
            value="{{ old('c_description_seo', isset($category->c_description_seo) ? $category->c_description_seo : '') }}"
            placeholder="Meta Description">
    </div>

    <div class="form-group">
        <label for="c_avatar">Avatar</label>
        <input type="file" class="form-control" name="c_avatar" id="c_avatar">
    </div>

    <div class="form-group">
        <label for="c_avatar_header">Avatar Header</label>
        <input type="file" class="form-control" name="c_avatar_header" id="c_avatar_header">
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1" name="hot">Nổi bật</label>
    </div>


    <button type="submit" class="btn btn-save btn-secondary mt-2">Lưu thông tin</button>
</form>
