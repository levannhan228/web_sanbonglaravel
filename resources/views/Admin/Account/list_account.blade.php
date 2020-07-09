
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
                <h2 class="box-title">Danh sách tài khoản</h2>
                    <button class="create-modal btn btn-success pull-right">
                        <span class="glyphicon glyphicon-plus-sign"></span> Create
                    </button>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Account</th>
                    <th>Password</th>
                    <th>Last Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($account as $acc)
                        <tr  class="acc{{$acc->id}}">
                            <td>{{$acc->id}}</td>
                            <td>{{$acc->account}}</td>
                            <td>{{$acc->password}}</td>    
                            <td>{{$acc->last_name}}</td>  
                            <td>{{$acc->name}}</td>
                            <td>{{$acc->email}}</td>
                            <td>{{$acc->phone}}</td>  
                            <td>
                                <button class="delete-modal btn btn-danger"
                                    data-id="{{$acc->id}}" data-account="{{$acc->account}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </td>
                            <td>
                            <button class="edit-modal btn btn-info" data-id="{{$acc->id}}" data-account="{{$acc->account}}"
                            data-password="{{$acc->password}}" data-last_name="{{$acc->last_name}}" data-name="{{$acc->name}}"
                            data-email="{{$acc->email}}" data-phone="{{$acc->phone}}">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </button>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="export">
                    <a href ="{{ route('export') }}" class="btn btn-warning" id="export-button"><i class="fa fa-cloud-download"></i> Export file </a>
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
						Bạn có chắn chắn là muốn xóa tài khoản <span class="dname"></span> ? <span
							class="hidden did"></span>
                    </div>
                    <form class="form-horizontal" role="form">
                        <div class="form-group hideid">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <p  class="error errorAccount"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="account">Account:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="faccount">
                            </div>
                        </div>
                        <p class="error errorPassword"></p>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fpassword">
                                </div>
                            </div>
                        <p class="error errorLastName"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="flast_name">
                            </div>
                        </div>
                        <p class="error errorName"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fname">
							</div>
                        </div>
                        <p class="error errorEmail"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="femail">
                            </div>
                        </div>
                        <p class="error errorPhone"></p>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fphone">
                            </div>
                        </div>
					</form>
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
