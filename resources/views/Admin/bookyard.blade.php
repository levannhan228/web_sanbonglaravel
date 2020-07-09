
@extends('Admin.Layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Account
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h2 class="box-title">Danh sách giao dịch</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Tỉnh / Thành phố</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>ID sân</th>
                    <th>Giá tiền</th>
                    <th>Thời gian đặt</th>
                    <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($bookyard as $bk)
                        <tr  class="bk{{$bk->id}}">
                            <td>{{$bk->id}}</td>
                            <td>{{$bk->last_name}}</td>
                            <td>{{$bk->name}}</td>    
                            <td>{{$bk->province_city}}</td>  
                            <td>{{$bk->address}}</td>
                            <td>{{$bk->phone}}</td>
                            <td>{{$bk->email}}</td>
                            <td>{{$bk->id_stadium}}</td>  
                            <td>{{$bk->price}}.000</td>
                            <td>{{$bk->date}}</td>  
                            <td>
                                <button class="delete-modal btn btn-danger"
                                    data-id="{{$bk->id}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>   
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<div class="deleteContent">
						Bạn có chắn chắn là muốn xóa giao dịch <span class="did"></span> ?
                    </div>
					<div class="modal-footer">
						<button type="button" class="btn actionBtn">
							<span id="footer_action_button" class='glyphicon'></span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove'></span> Close
						</button>
					</div>
				</div>
			</div>
        </div>
    </div>
  <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<style>
    .error{
        color: red;
        margin-left: 10rem;
    }
</style>
@endsection
