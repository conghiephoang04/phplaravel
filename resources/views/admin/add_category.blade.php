@include('admin/headerAdmin')
<br><br>
<h3>thêm danh mục sản phẩm</h3>
<div class="container-fluid">
    <div class="row">
        <form role="form" action="/admin/add_category" method="POST" enctype="multipart/form-data" style="width:600px">
            @csrf 
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
                            </div>
                            <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
                        </div>
                    </div>
                </div>
            </div>
        </form><!-- /.col-->
    </div>	<!--/.main-->	
</div>

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table.js')}}"></script>	
</body>
</html>

