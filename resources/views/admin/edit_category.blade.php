@include('admin/headerAdmin')	
>
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> chỉnh sửa Danh mục: {{ $category->name }}</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <form action="{{ route('editcategory', $category->id) }}" method="POST" enctype="multipart/form-data" style="width:600px">
            @csrf
            @method('POST')
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                     
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" name="name" required class="form-control" value="{{ $category->name }}" placeholder="">
                            </div>
                        <button type="submit" name="sbm" class="btn btn-success">Cập nhật</button>
                        
                    </div>
                </form>
                </div>
            </div>
        </div><!-- /.col-->
</div>	<!--/.main-->	
</body>

</html>
