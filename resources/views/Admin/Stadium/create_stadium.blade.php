@extends('Admin.Layout.main')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Stadium
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>
    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Đăng kí sân bóng</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                    <form name="" action="admin/stadium/create" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><strong>Người quản lý</strong></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input type="text" name="manager_name" placeholder="Họ tên" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="clear-bordered"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><strong>Thông tin cơ bản</strong></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Tên sân</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" placeholder="Nhập tên sân" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Giới thiệu ngắn</label>
                                <div class="col-sm-9">
                                <textarea name="short_note" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row ng-scope">
                                <label class="col-sm-2 control-label">Mặt sân</label>
                                <div class="col-md-5">
                                    <select id="ddlStadiumType" name="surface" class="form-control">
                                        <option value="Sân cỏ nhân tạo" selected="selected">Sân cỏ nhân tạo</option>
                                        <option value="Sân cỏ tự nhiên">Sân cỏ tự nhiên</option>
                                        <option value="Sân cát">Sân cát</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-2 control-label">Giá tiền</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="" name="price" placeholder="Tiền thuê / 1h" class="form-control" required="">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <div class="clear-bordered"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><strong>Địa chỉ</strong></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Tỉnh / Thành phố</label>
                                <div class="col-md-5">
                                    <select class="form-control" name="province_city">
                                        <option label="Vinh" value="Vinh" selected="selected">Vinh
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Vị trí</label>
                                <div class="col-md-5">
                                    <input type="text" name="location"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="clear-bordered"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><strong>Thông tin liên hệ</strong></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Điện thoại</label>
                                <div class="col-md-5">
                                    <input required="" placeholder="Điện thoại liên hệ đặt sân" name="phone"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Địa chỉ email</label>
                                <div class="col-md-5">
                                    <input name="email" class="form-control" placeholder="Địa chỉ email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Facebook</label>
                                <div class="col-md-5">
                                    <input placeholder="Địa chỉ facebook" name="facebook" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="clear-bordered"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><strong>Hình ảnh sân</strong></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Ảnh đại diện</label>
                                <div class="col-md-9">
                                    <div class="dropimg">
                                        <input type="file" class="custom-file-input" id="file-input" name="img">
                                        <div class="box-2">
                                            <div class="result"></div>
                                        </div>
                                    </div>
                                    <img class="cropped" src="" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="clear-bordered"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="box-body pad">
                                        <form>
                                            <textarea class="textarea" placeholder="Place some text here" name="about"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer" style="margin-top:30px">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-9 text-right">
                                    <a class="btn btn-default" >Quay lại</a>
                                    &nbsp;
                                    <button type="submit" class="btn btn-success" data-toggle="modal" >
                                    <span class="glyphicon dropn glyphicon-floppy-save"></span> Lưu thay đổi
                                    </button>
                            </div>
                        </div>                              
                    </form>
            </div>
        <!-- /.row -->
        </div>
    </div>
    </section>
</div>
<script src="assets/js/dropimg.js" type="text/javascript"></script>
@endsection
<style>
.col-sm-2{
    /* margin-left: 3rem; */
}
.clear-bordered {
    border-top: 1px dotted #ccc;
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0.6rem;
    float: left;
    width: 99%;
}
label{
    font-weight: normal !important;
}
thead {
    font-size: 14px;
}
@media screen and (max-width: 767px) {
    .clear-bordered {
        width: 97%;
    }
}
@media screen and (min-width: 1023px) {
    .col-sm-2{
        margin-left: 3rem !important;
    }
}
.box-body{
    margin-top: 2rem;
}
a.btn.btn-default {
    height: 3.6rem;
}
.control-label {
    padding-top: 7px;
}
.page {
	margin: 1em auto;
	max-width: 768px;
	display: flex;
	align-items: flex-start;
	flex-wrap: wrap;
	height: 100%;
}

.box {
	padding: 0.5em;
	width: 100%;
	margin:0.5em;
}

.box-2 {
	padding: 0.5em;
	width: calc(100%/2 - 1em);
}

.options label,
.options input{
	width:4em;
	padding:0.5em 1em;
}
.btn{
	background:white;
	color:black;
	border:1px solid black;
	padding: 0.5em 1em;
	text-decoration:none;
	/* margin:0.8em 0.3em; */
	display:inline-block;
	cursor:pointer;
}

.hide {
	display: none;
}

img {
	max-width: 100%;
}
</style>
