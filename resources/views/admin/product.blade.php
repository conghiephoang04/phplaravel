@include('admin/headerAdmin')	

	
	
<br><br>
	<div class="row">

<div class="container-fluid">

                     <!-- table section -->
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Sản phẩm</h2>
                              </div>
                           </div>
                           
	<div id="toolbar" style="left: 970px" class="btn-group">
        <a href="/admin/add_product" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
    </div>
                           <div class="table_section padding_infor_info">
                              <div class="table-responsive-sm">
                                 <table class="table table-hover">
                                    <thead >
                                       <tr>
                                          <th>ID</th>
                                          <th>Tên sản phẩm</th>
                                          <th>giá</th>
                                          <th>Hình ảnh</th>
                                          <th>ID_Category</th>
                                          
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $pro)
                                        <tr>
                                            <td>{{$pro->id}}</td>
                                            <td>{{$pro->title}}</td>
                                            <td>${{$pro->price}}</td>
                                            <td style="text-align: center; padding:10px"><img width="130" height="160" src="{{asset('image/product/' .$pro->image)}}" /></td>
                                            <td>{{$pro->status}}</td>
                                            <td>{{$pro->category_id}}</td>
                                            <td class="form-group" style="display: flex;">
                                                <form action="/pro/sua/{{ $pro->id }}" style="padding-right: 20px" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                        <button type="submit" class="btn btn-danger">Sửa</button>
                                                </form>
                                                <form action="/admin/xoa/{{$pro->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-info">xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                      
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                </div>
               
			</div>
		</div>
	</div><!--/.row-->	
</div>	<!--/.main-->

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table.js')}}"></script>	
</body>

</html>
