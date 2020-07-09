$(document).ready(function() {
    $('#dang_ky').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var last_name = $('#create_last_name').val();
        var name = $('#create_name').val();
        var account = $('#create_account').val();
        var password = $('#create_password').val();
        $.ajax({
            'type': 'post',
            'url': 'signup',
            'data': { 
                    'last_name':last_name, 
                    'name':name, 
                    'account':account, 
                    'password':password }, 
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.account != undefined) {
                        $('.errorAccount').show().text(data.message.account[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.last_name != undefined) {
                        $('.errorLastName').show().text(data.message.last_name[0]);
                    }
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }  
                } else {
                    $('.error').hide();
                    swal("Đăng ký thành công !", "Bây giờ bạn có thể tận hưởng mọi tính năng của chúng tôi", "success")
                    $('.alert-success').show().text(data.message);
                }
            }
        });
    });

    $('#showpass').click(function(){
        var pass = document.getElementById("create_password");
        if (pass.type === "password"){
            pass.type = "text";
        }else{
            pass.type = "password";
        }
    });

    $('#dang_nhap').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var account = $('#account').val();
        var password = $('#password').val();
        $.ajax({
            'type': 'post',
            'url': 'signin',
            'data': { 
                    'account':account, 
                    'password':password }, 
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.alert-danger').hide();
                    $('.alert-danger').show().text(data.message);
                }else{
                    window.location.href = "homepage"
                }
            }
        });
    });

    $(document).on('click','.delete-modal',function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').removeClass('create');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('account'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click','.delete',function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'admin/account/delete',
            data: {
                'id': $('.did').text(),
            },
            success: function(data) {
                $('#myModal').modal('hide')
                $('.acc' + $('.did').text()).remove();
                swal("Xoá thành công !", "", "success")
            }
        });
    });

    $(document).on('click', '.edit-modal', function() {
        $('.error').hide();
        $('.hideid').show();
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('create');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#faccount').val($(this).data('account'));
        $('#fpassword').val($(this).data('password'));
        $('#flast_name').val($(this).data('last_name'));
        $('#fname').val($(this).data('name'));
        $('#femail').val($(this).data('email'));
        $('#fphone').val($(this).data('phone'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'admin/account/edit',
            data: {
                'id': $("#fid").val(),
                'account': $("#faccount").val(),
                'password': $("#fpassword").val(),
                'last_name': $("#flast_name").val(),
                'name': $("#fname").val(),
                'email': $('#femail').val(),
                'phone': $('#fphone').val()
            },
            success: function(data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.account != undefined) {
                        $('.errorAccount').show().text(data.message.account[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.last_name != undefined) {
                        $('.errorLastName').show().text(data.message.last_name[0]);
                    }
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.phone != undefined) {
                        $('.errorPhone').show().text(data.message.phone[0]);
                    }      
                } else {
                    $('#myModal').modal('hide')
                    $('.acc' + data.id).replaceWith("<tr class='acc" + data.id + "'><td>" + data.id + "</td><td>" + data.account + "</td><td>" + data.password + "</td><td>" + data.last_name + "</td><td>" + data.name + "</td><td>" + data.email + "</td><td>" + data.phone + "</td><td><button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-account='" + data.account + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-account='" + data.account + "'data-password='" + data.password + "' data-last_name='" + data.last_name + "' ' data-name='" + data.name + "' data-email='" + data.email + "' data-phone='" + data.phone + "'><span class='glyphicon glyphicon-edit'></span> Edit</button></td></tr>");
                    swal("Update thông tin thành công !", "", "success")
                }
            }
        });
    });

    $(document).on('click', '.create-modal', function() {
        $('.error').hide();
        $('#footer_action_button').text(" Create");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('create');
        $('.modal-title').text('Create Account');
        $('.deleteContent').hide();
        $('.hideid').hide();
        $('.form-horizontal').show();
        $('#fid').val('');
        $('#faccount').val('');
        $('#fpassword').val('');
        $('#flast_name').val('');
        $('#fname').val('');
        $('#femail').val('');
        $('#fphone').val('');
        $('#myModal').modal('show');
    });

    $(document).on('click','.create',function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type': 'post',
            'url': 'admin/account/create',
            'data': { 
                'id': $("#fid").val(),
                'account': $("#faccount").val(),
                'password': $("#fpassword").val(),
                'last_name': $("#flast_name").val(),
                'name': $("#fname").val(),
                'email': $('#femail').val(),
                'phone': $('#fphone').val()}, 
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.account != undefined) {
                        $('.errorAccount').show().text(data.message.account[0]);
                    }
                    if (data.message.password != undefined) {
                        $('.errorPassword').show().text(data.message.password[0]);
                    }
                    if (data.message.last_name != undefined) {
                        $('.errorLastName').show().text(data.message.last_name[0]);
                    }
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }  
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }
                    if (data.message.phone != undefined) {
                        $('.errorPhone').show().text(data.message.phone[0]);
                    }      
                } else {
                    $('#myModal').modal('hide')
                    $('#example1').append("<tr class='acc" + data.id + "'><td>" + data.id + "</td><td>" + data.account + "</td><td>" + data.password + "</td><td>" + data.last_name + "</td><td>" + data.name + "</td><td>" + data.email + "</td><td>" + data.phone + "</td><td><button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-account='" + data.account + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-account='" + data.account + "'data-password='" + data.password + "' data-last_name='" + data.last_name + "' ' data-name='" + data.name + "' data-email='" + data.email + "' data-phone='" + data.phone + "'><span class='glyphicon glyphicon-edit'></span> Edit</button></td></tr>");
                    swal("Tạo tài khoản thành công !", "", "success")
                }
            }
        });
    });

    $(document).on('click','.delete-stadium-modal',function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete_stadium');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.stdname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click','.delete_stadium',function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'admin/stadium/delete',
            data: {
                'id': $('.did').text(),
            },
            success: function(data) {
                $('#myModal').modal('hide')
                $('.std' + $('.did').text()).remove();
            }
        });
    });
    $('#dathang').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var last_name = $('#deal_last_name').val();
        var name = $('#deal_name').val();
        var province_city = $('#deal_province_city').val();
        var address = $('#deal_address').val();
        var phone = $('#deal_phone').val();
        var email = $('#deal_email').val();
        var id_stadium = $('#id_stadium').val();
        var price = $('#price').val();
        $.ajax({
            'type': 'post',
            'url': 'bookyard',
            'data': { 
                    'last_name':last_name, 
                    'name':name, 
                    'province_city':province_city, 
                    'address':address,
                    'phone':phone,
                    'email':email,
                    'id_stadium':id_stadium,
                    'price':price
                }, 
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    $('.error').hide();
                    if (data.message.last_name != undefined) {
                        $('.errorLastname').show().text(data.message.last_name[0]);
                    }
                    if (data.message.name != undefined) {
                        $('.errorName').show().text(data.message.name[0]);
                    }
                    if (data.message.province_city != undefined) {
                        $('.errorProvince').show().text(data.message.province_city[0]);
                    }
                    if (data.message.address != undefined) {
                        $('.errorAddress').show().text(data.message.address[0]);
                    }  
                    if (data.message.phone != undefined) {
                        $('.errorPhone').show().text(data.message.phone[0]);
                    }  
                    if (data.message.email != undefined) {
                        $('.errorEmail').show().text(data.message.email[0]);
                    }  
                } else {
                    $('.error').hide();
                    swal("Thành công !", "Chúng tôi sẽ liên hệ với bạn 1 lần nữa để xác nhận!", "success")
                    $('.alert-success').show().text(data.message);
                }
            }
        });
    });
    $('.modal-footer').on('click','.delete',function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'admin/bookyard/delete',
            data: {
                'id': $('.did').text(),
            },
            success: function(data) {
                $('#myModal').modal('hide')
                $('.bk' + $('.did').text()).remove();
                swal("Xoá thành công !", "", "success")
            }
        });
    });
});