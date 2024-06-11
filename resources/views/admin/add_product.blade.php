@include('admin/headerAdmin')
<br><br>
<div class="container-fluid">
    <h3>Thêm sản phẩm</h3>
</div><!--/.row-->
<div class="row">
    <form role="form" action="/admin/add_product" method="POST" enctype="multipart/form-data" class="col-12">
    @csrf  
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tên sản phẩm: </label>
                        <input required name="title" class="form-control" placeholder="">
                    </div>
                                                    
                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input required name="price" type="text" min="0" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input required name="detail" type="texts" min="0" class="form-control">
                    </div>    
                    
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        
                        <input required name="image" type="file">
                        <br>
                        <div>
                            <img  style="filter: drop-shadow(0 0 5px rgb(119, 119, 145));" width="80px" src="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="category_id" class="form-control">
                            <option value=1>ÁO khoác</option>
                            <option value=3>Nam</option>
                            <option value=4>NỮ</option>
                            <option value=5>Túi xách</option>
                            <option value=2>Quần</option>
                            <option value=6>giày</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
               
                </div>
            </div>
        </div>
    </div><!-- /.col-->
    </form>
</div><!-- /.row -->
</div>


<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table.js')}}"></script>	
</body>

</html>
