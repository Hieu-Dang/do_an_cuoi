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