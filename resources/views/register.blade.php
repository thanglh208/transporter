@extends('main')

@section('title')
Đăng ký thành viên
@endsection

@section('content')
<form method="post" action="{{Asset('register')}}" id="form-register">
	<h2><font> ĐĂNG KÝ TÀI KHOẢN </font></h2>
	<input type="email" name="email" id="email" placeholder="Email" class="form-control"/>
	<input type="password" name="password" id="password" placeholder="Mật khẩu" class="form-control"/>
	<input type="password" name="password_confirmation" id="password_confirmation"  placeholder="Gõ lại mật khẩu"class="form-control"/>	
	<input type="text" name="realName" id="realName" placeholder="Họ và tên" class="form-control"/>
	<input type="text" name="phone" id="phone" placeholder="Số điện thoại" class="form-control"/>
	<input type="date" name="birthday" id="birthday" placeholder="Ngày tháng năm sinh" class="form-control"/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

	<button class="btn btn-lg btn-warning btn-block"> Đăng ký </button>
</form>
<script>
$("#form-register").validate({
	rules:{
		email:{
			required:true,
			email:true
		},
		password:{
			required:true,
			minlength:6
		},
		password_confirmation:{
			equalTo:"#password"
		},		
		realName:{
			required:true
		},
		phone:{
			required:true,
			digits:true
		},
		birthday:{
			required:true
		}
	},
	messages: {
		email: {
			required: "Email không được để trống",
			email: "Không đúng định dạng email"
		},
		password: {
			required: "Mật khẩu không được để trống",
			minlength: "Mật khẩu phải có độ dài trên 6 ký tự"
		},
		password_confirmation: {
			equalTo: "Mật khẩu không giống"
		},
		
		realName: {
			required: "Họ tên không được để trống"
		},
		phone: {
			required: "Số điện thoại không được để trống",
			digits: "Số điện thoại chỉ được gõ ký tự dạng số"
		},
		birthday: {
			required: "Bạn chưa nhập ngày sinh"
		}
	}
})
</script>
@endsection