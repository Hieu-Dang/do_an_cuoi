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
	var full_name = document.getElementById('full_name_edit').value;
	var cmnd = document.getElementById('cmnd_edit').value;
	var phone = document.getElementById('phone_edit').value;
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
}
function check_add_product() {
	var name = document.getElementById('name_add').value;
	var price = document.getElementById('price_add').value;
	var discount = document.getElementById('discount_add').value;
	var tonkho = document.getElementById('tonkho_add').value;
	var mota_ngan = document.getElementById('mota_ngan_add').value;
	var mota_dai = document.getElementById('mota_dai_add').value;
	var img_main = document.getElementById('img_main_add').value;
	check_price = /^[0-9]{4,50}$/;
	check_discount = /^[0-9]{1,3}$/;
	check_tonkho = /^[0-9]{1,7}$/;
	if (name=='') {
		alert("Tên sản phẩm không được để trống");
		return false;
	}
	if (price=='') {
		alert("Giá tiền không được để trống");
		return false;
	}
	if (!check_price.test(price)) {
		alert("Giá phải lớn hơn 4 kí tự và phải là số");
		return false;
	}
	if (price<0) {
		alert("Giá tiền không <0");
		return false;
	}
	if (discount=='') {
		alert("Giảm giá không được để trống");
		return false;
	}
	if (!check_discount.test(discount)) {
		alert("Giảm giá phải là kí tự số và < 4 kí tự");
		return false;
	}
	if (discount<0 || discount>100) {
		alert("Giảm giá không được >100 và <0");
		return false;
	}
	if (tonkho=='') {
		alert("Tồn kho không được để trống");
		return false;
	}
	if (!check_tonkho.test(tonkho)) {
		alert("Tồn kho phải là số và <8 kí tự");
		return false;
	}
	if (tonkho<0) {
		alert("Tồn kho phải >0");
		return false;
	}
	if (mota_ngan=='') {
		alert("Mô tả ngắn không được để trống");
		return false;
	}
	if (mota_dai=='') {
		alert("Mô tả dài không được để trống");
		return false;
	}
}

function check_name_sp(name_id,error_id){
	var name = document.getElementById(name_id).value;
	var error;
	check_name = /^[A-Za-z0-9_\s\W]{6,50}$/;
	if (name=='') {
		error='tên sản phẩm không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_name.test(name)) {
		error='tên sản phẩm phải từ 6 đến 50 kí tự';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_price_sp(name_id,error_id){
	var price = document.getElementById(name_id).value;
	var error;
	check_price = /^[0-9]{4,50}$/;
	if (price=='') {
		error='Giá sản phẩm không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_price.test(price)) {
		error='Giá sản phẩm phải từ 4 đến 50 kí tự và phải là số';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_discount_sp(name_id,error_id){
	var discount = document.getElementById(name_id).value;
	var error;
	check_discount = /^[0-9]{1,3}$/;
	if (discount=='') {
		error='Giảm giá sản phẩm không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_discount.test(discount)) {
		error='Giảm giá phải là số không được chứa kí tự đặc biệt giới hạn 3 số';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (discount<0 || discount>100) {
		error='Giảm giá sản phẩm phải từ 0-100';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_tonkho_sp(name_id,error_id){
	var tonkho = document.getElementById(name_id).value;
	var error;
	check_tonkho = /^[0-9]{1,4}$/;
	if (tonkho=='') {
		error='Tồn kho sản phẩm không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_tonkho.test(tonkho)) {
		error='Tồn kho phải là số không được chứa kí tự đặc biệt giới hạn 4 số';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (tonkho<0 || tonkho>9999) {
		error='Tồn kho sản phẩm phải từ 0-9999';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_mota_ngan_sp(name_id,error_id){
	var mota_ngan = document.getElementById(name_id).value;
	var error;
	check_mota_ngan = /^[A-Za-z0-9_\s\W]{6,70}$/;
	if (mota_ngan=='') {
		error='Mô tả ngắn không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_mota_ngan.test(mota_ngan)) {
		error='Mô tả ngắn giới hạn 6-70 kí tự';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_mota_dai_sp(name_id,error_id){
	var mota_dai = document.getElementById(name_id).value;
	var error;
	check_mota_dai = /^[A-Za-z0-9_\s\W]{6,1000}$/;
	if (mota_dai=='') {
		error='Mô tả dài không được để trống';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}
	if (!check_mota_dai.test(mota_dai)) {
		error='Mô tả dài giới hạn 6-1000 kí tự';
		document.getElementById(error_id).innerHTML = '<p class="text-danger">'+error+'</p>';
		return false;
	}else{
		document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
		return true;
	}
}
function check_img_one(name_id,error_id,rewiew_id){
	var fileInput = document.getElementById(name_id);
	var filePath = fileInput.value;//lấy giá trị input theo id
	var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
	//Kiểm tra định dạng
	if(!allowedExtensions.exec(filePath)){
	document.getElementById(error_id).innerHTML = '<p class="text-danger">Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.</p>';	
	fileInput.value = '';
	return false;
	}else{
	//Image preview
	if (fileInput.files && fileInput.files[0]) {
	var reader = new FileReader();
	document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
	reader.onload = function(e) {
	document.getElementById(rewiew_id).innerHTML = '<img style="width:50px;height:50px;" src="'+e.target.result+'"/>';
	};
	reader.readAsDataURL(fileInput.files[0]);
	}
	return true;
	}
}
function check_img_more(name_id,error_id,rewiew_id){
	var fileInput = document.getElementById(name_id);
	var filePath = fileInput.value;//lấy giá trị input theo id
	var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
	//Kiểm tra định dạng
	if(!allowedExtensions.exec(filePath)){
	document.getElementById(error_id).innerHTML = '<p class="text-danger">Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.</p>';	
	fileInput.value = '';
	return false;
	}else{
	//Image preview
	if (fileInput.files && fileInput.files[0]) {
	var reader = new FileReader();
	document.getElementById(error_id).innerHTML = '<p class="text-success"><i class="fa fa-check"></i></p>';
	reader.onload = function(e) {
	document.getElementById(rewiew_id).innerHTML = '<img style="width:50px;height:50px;" src="'+e.target.result+'"/>';
	};
	reader.readAsDataURL(fileInput.files[0]);
	}
	return true;
	}
}
function check_add_sp(){
	var check1 = check_name_sp('name_add','error_name_sp_add');
	var check2 =check_price_sp('price_add','error_price_sp_add');
	var check3 =check_discount_sp('discount_add','error_discount_sp_add');
	var check4 =check_tonkho_sp('tonkho_add','error_tonkho_sp_add');
	var check5 =check_mota_ngan_sp('mota_ngan_add','error_mota_ngan_sp_add');
	var check6 =check_mota_dai_sp('mota_dai_add','error_mota_dai_sp_add');
	var check7 =check_img_one('img_main_add','error_img_main_sp_add','review_img_main_add');
	var check8 =check_img_one('img_phu_add','error_img_phu_sp_add','review_img_phu_add');
	var check9 =check_img_more('img_mota_add[]','error_img_mota_sp_add','review_img_mota_add');
	if (check1===true && check2===true && check3===true && check4===true && check5===true && check6===true && check7===true && check8===true && check9===true) {
		return true;
	}else{
		alert('Hãy xem lại thông tin thêm sản phẩm');
		return false;
	}
}
function check_edit_sp(name,name_1,price,price_1,discount,discount_1,tonkho,tonkho_1,mota_ngan,mota_ngan_1,mota_dai,mota_dai_1){
	var check1 = check_name_sp(name,name_1);
	var check2 =check_price_sp(price,price_1);
	var check3 =check_discount_sp(discount,discount_1);
	var check4 =check_tonkho_sp(tonkho,tonkho_1);
	var check5 =check_mota_ngan_sp(mota_ngan,mota_ngan_1);
	var check6 =check_mota_dai_sp(mota_dai,mota_dai_1);
	if (check1===true && check2===true && check3===true && check4===true && check5===true && check6===true) {
		return true;
	}else{
		alert('Hãy xem lại thông tin chỉnh sửa sản phẩm');
		return false;
	}
}