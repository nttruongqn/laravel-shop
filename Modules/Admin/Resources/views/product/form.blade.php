<form action="" method="POST" enctype="multipart/form-data">
    @csrf()
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name">Tên Sản phẩm</label>
                <input type="text" class="form-control" name="pro_name" id="pro_name"
                    value="{{ old('pro_name', isset($product->pro_name) ? $product->pro_name : '') }}"
                    placeholder="Nhập tên Sản phẩm">
                @if ($errors->has('pro_name'))
                    <div class="error-text">
                        {{ $errors->first('pro_name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_description">Mô tả</label>
                <textarea class="form-control" name="pro_description" id="" cols="30" rows="10"
                    placeholder="Mô tả sản phẩm">{{ old('pro_description', isset($product->pro_description) ? $product->pro_description : '') }}</textarea>
                @if ($errors->has('pro_description'))
                    <div class="error-text">
                        {{ $errors->first('pro_description') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_content">Nội dung</label>
                <textarea class="form-control" name="pro_content" id="" cols="30" rows="10"
                    placeholder="Nội dung sản phẩm">{{ old('pro_content', isset($product->pro_content) ? $product->pro_content : '') }}</textarea>
                @if ($errors->has('pro_content'))
                    <div class="error-text">
                        {{ $errors->first('pro_content') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_title_seo">Meta Title</label>
                <input type="text" class="form-control" name="pro_title_seo" id="pro_title_seo"
                    value="{{ old('pro_title_seo', isset($product->pro_title_seo) ? $product->pro_title_seo : '') }}"
                    placeholder="Meta Description">
            </div>
            <div class="form-group">
                <label for="pro_description_seo">Meta Description</label>
                <input type="text" class="form-control" name="pro_description_seo" id="pro_description_seo"
                    value="{{ old('pro_description_seo', isset($product->pro_description_seo) ? $product->pro_description_seo : '') }}"
                    placeholder="Meta Description">
            </div>
        </div>
        <div class="col-sm-4">

            <div class="form-group">
                <label for="name">Loại sản phẩm</label>
                <select name="pro_category_id" id="" class="form-control">
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{old('product_category_id', isset($product->pro_category_id)?$product->pro_category_id:'') == $category->id ? "selected": ''}}>
                                  {{$category->c_name}}
                            </option>
                        @endforeach

                    @endif
                </select>
                @if ($errors->has('pro_category_id'))
                    <div class="error-text">
                        {{ $errors->first('pro_category_id') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_price">Giá sản phẩm</label>
                <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Giá sản phẩm"
                    value="{{ old('pro_price', isset($product->pro_price) ? $product->pro_price : '') }}" />
                @if ($errors->has('pro_price'))
                    <div class="error-text">
                        {{ $errors->first('pro_price') }}
                    </div>
                @endif

            </div>
            <div class="form-group">
                <label for="pro_sale">% Khuyến mãi</label>
                <input type="text" class="form-control" name="pro_sale" id="pro_sale"
                    value="{{ old('pro_sale', isset($product->pro_sale) ? $product->pro_sale : '') }}"
                    placeholder="% Khuyến mãi " />
            </div>
            <div class="form-group">
                <label for="pro_avatar">Avatar</label>
                <input type="file" class="form-control" name="pro_avatar" id="rp_avatar">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" name="hot">Nổi bật</label>
            </div>
            <button type="submit" class="btn btn-save btn-secondary mt-2">Lưu thông tin</button>
        </div>
    </div>
</form>
