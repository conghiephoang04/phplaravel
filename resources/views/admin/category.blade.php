@include('admin/headerAdmin')

 <br><br>

    <div class="row">



        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Danh mục</h2>
                                 </div>
                                 
                                </div>
                                <div id="toolbar" style="margin-left: 750px" class="btn-group">
                                    <a href="/admin/add_category" class="btn btn-success">
                                        <i class="glyphicon glyphicon-plus"></i> Thêm danh mục
                                    </a>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                           @if ($errors->any())
                              <div class="alert alert-danger">
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                              </div>
                           @endif

                           @if (session('success'))
                              <div class="alert alert-success">
                                    {{ session('success') }}
                              </div>
                           @endif
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                            
                                          </tr>
                                       </thead>
                                       <tbody>
                                        @foreach ($data as $pro)
                                        <tr>
                                            <td style="">{{$pro->id}}</td>
                                            <td style="">{{$pro->name}}</td>
                                            <td class="form-group" style="display:flex; ">
                                                <form action="/admin/sua_cate/{{ $pro->id }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn edit sản phẩm này không?');">
                                                    @csrf
                                                    @method('GET')
                                                        <button type="submit" class="btn btn-success" style="margin-right:20px ">Sửa</button>
                                                    </form>
                                                <form action="/admin/xoa_cate/{{$pro->id}}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn edit sản phẩm này không?');">
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

    </div><!--/.row-->
</div>	<!--/.main-->