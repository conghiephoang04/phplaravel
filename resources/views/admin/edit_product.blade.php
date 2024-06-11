@include('admin/headerAdmin')

        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chỉnh sửa sản phẩm: {{ $product->title }}</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                        <form action="{{ route('updateproduct', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="title" required class="form-control" value="{{ $product->title }}" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="number" name="price" required value="{{ $product->price }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input type="file" name="image">
                                    <br>
                                    @if($product->image)
                                        <div>
                                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" style="filter: drop-shadow(0 0 5px rgb(119, 119, 145));" width="80px">
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category_id" class="form-control">
                                        <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Áo</option>
                                        <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Quần</option>
                                        <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Nam</option>
                                        <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea name="detail" required class="form-control" rows="3">{{ $product->detail }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div>  <!--/.main-->    
</body>

</html>
      