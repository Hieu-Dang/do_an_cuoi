//Hàm kiểm tra form đăng nhập admin
function check_login_admin() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	check_user = /^[a-z0-9_-]{5,50}$/;
	check_password =/^[a-z0-9_-]{5,50}$/;
	//Check tài khoản
	if (username=='') {
		alert("Tài khoản không được để trống");
		return false;
	}
	if (!check_user.test(username)) {
		alert("Tài khoản phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}
	//check mật khẩu
	if (password=='') {
		alert("Mật khẩu không được để trống");
		return false;
	}
	if (!check_password.test(password)) {
		alert("Mật khẩu phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}else{
		return true;
	}
	
}
function check_add_user() {
	var username = document.getElementById('username_add').value;
	var password = document.getElementById('password_add').value;
	var full_name = document.getElementById('full_name_add').value;
	var phone = document.getElementById('phone_add').value;
	check_user = /^[a-z0-9_-]{5,50}$/;
	check_password =/^[a-z0-9_-]{5,50}$/;
	check_phone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if (username=='') {
		alert("Tài khoản không được để trống");
		return false;
	}
	if (!check_user.test(username)) {
		alert("Tài khoản phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}
	if (password=='') {
		alert("Mật khẩu không được để trống");
		return false;
	}
	if (!check_password.test(password)) {
		alert("Mật khẩu phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}
	if (full_name=='') {
		alert("Họ và tên không được để trống");
		return false;
	}
	if (phone=='') {
		alert("Số điện thoại không được để trống");
		return false;
	}
	if (!check_phone.test(phone)) {
		alert("Số điện thoại sai cú pháp");
		return false;
	}else{
		return true;
	}	
}
function check_edit_user() {
	var username = document.getElementById('username_edit').value;
	var password = document.getElementById('password_edit').value;
	var full_name = document.getElementById('full_name_edit').value;
	var phone = document.getElementById('phone_edit').value;
	check_user = /^[a-z0-9_-]{5,50}$/;
	check_password =/^[a-z0-9_-]{5,50}$/;
	check_phone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if (username=='') {
		alert("Tài khoản không được để trống");
		return false;
	}
	if (!check_user.test(username)) {
		alert("Tài khoản phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}
	if (password=='') {
		alert("Mật khẩu không được để trống");
		return false;
	}
	if (!check_password.test(password)) {
		alert("Mật khẩu phải dài hơn 4 kí tự và không có kí tự đặc biệt");
		return false;
	}
	if (full_name=='') {
		alert("Họ và tên không được để trống");
		return false;
	}
	if (phone=='') {
		alert("Số điện thoại không được để trống");
		return false;
	}
	if (!check_phone.test(phone)) {
		alert("Số điện thoại sai cú pháp");
		return false;
	}else{
		return true;
	}
	
}
function check_add_shipper() {
	var full_name = document.getElementById('full_name_add').value;
	var cmnd = document.getElementById('cmnd_add').value;
	var phone = document.getElementById('phone_add').value;
	check_phone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if (full_name=='') {
		alert("Họ và tên không được để trống");
		return false;
	}
	if (cmnd=='') {
		alert("Số CMT không được để trống");
		return false;
	}
	if (phone=='') {
		alert("Số điện thoại không được để trống");
		return false;
	}
	if (!check_phone.test(phone)) {
		alert("Số điện thoại sai cú pháp");
		return false;
	}
}
function check_edit_shipper() {
	var full_name = document.getElementById('full_name_add').value;
	var cmnd = document.getElementById('cmnd_add').value;
	var phone = document.getElementById('phone_add').value;
	check_phone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if (full_name=='') {
		alert("Họ và tên không được để trống");
		return false;
	}
	if (cmnd=='') {
		alert("Số CMT không được để trống");
		return false;
	}
	if (phone=='') {
		alert("Số điện thoại không được để trống");
		return false;
	}
	if (!check_phone.test(phone)) {
		alert("Số điện thoại sai cú pháp");
		return false;
	}
}