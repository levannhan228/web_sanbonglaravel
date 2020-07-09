
@extends('Admin.Layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Stadium
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
                <h2 class="box-title">Danh sách sân bóng</h2>
                    <a href="admin/stadium/create" class="btn btn-success pull-right">
                        <span class="glyphicon glyphicon-plus-sign"></span> Create
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Tên chủ sân</th>
                    <th>Tên sân</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Facebook</th>
                    <th>Tỉnh/Thành phố</th>
                    <th>Vị trí</th>
                    <th>Mặt sân</th>
                    <th>img</th>
                    <th>Giá tiền</th>
                    <th>user_id</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($stadium as $std)
                        <tr  class="std{{$std->id}}">
                            <td>{{$std->id}}</td>
                            <td>{{$std->manager_name}}</td>
                            <td>{{$std->name}}</td>
                            <td>{{$std->phone}}</td>
                            <td>{{$std->email}}</td>
                            <td>{{$std->facebook}}</td>
                            <td>{{$std->province_city}}</td>    
                            <td>{{$std->location}}</td>
                            <td>{{$std->surface}}</td>  
                            <td><img src="assets/images/{{$std->img}}" style="width:100px" alt=""></td>  
                            <td>{{$std->price}}</td>
                            <td>{{$std->user_id}}</td>
                            <td>
                                <button class="delete-stadium-modal btn btn-danger"
                                    data-id="{{$std->id}}" data-name="{{$std->name}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </td>
                            <td>
                                <a class="btn btn-info"  href="admin/stadium/edit/{{$std->id}}">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="export">
                    <a href ="{{ route('export_sadium') }}" class="btn btn-warning" id="export-button"><i class="fa fa-cloud-download"></i> Export file </a>
                </div>
            </div>
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
						Bạn có chắn chắn là muốn xóa sân <span class="stdname"></span> ? <span
							class="hidden did"></span>
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

<style>
    .error{
        color: red;
        margin-left: 10rem;
    }
</style>
@endsection
