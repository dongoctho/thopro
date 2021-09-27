<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>đăng kí</title>
</head>
<body>
	<form action="ketqua.php" method="post" enctype="mutipart/form-data">
	<table>
		<tr>
		 <td colspan="2">Đăng kí</td>
		 
		</tr>

		<tr>
		 <td>username</td>
		 <td><input type="text" name="username"></td>
		</tr>

		<tr>
		 <td>password</td>
		 <td>
		 	<input type="password" name="password">
		 </td>
		</tr>

		<tr>
		 <td>Nhập lại pass word</td>
		 <td>
		 	<input type="password" name="repassword">
		 </td>
		</tr>

		<tr>
		 <td>giới tính</td>
		 <td>
		 	<input type="radio" name="gioitinh" value="nam">nam
		 	<input type="radio" name="gioitinh" value="nữ">nữ
		 </td>
		</tr>

		<tr>
		 <td>ngày sinh</td>
		 <td> 
           <input type="date" name="ngaysinh">
		 </td>
		</tr>

		<tr>
			<td>Địa chỉ</td>
			<td>
				<textarea name="diachi" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>

		<tr>
			<td>ảnh avatar</td>
			<td>
				<input type="file" name="avatar">
			</td>
		</tr>

		<tr>
			<td> sở thích</td>
			<td>
				<input type="checkbox" name="sothich" value="xem phim">xem phim
				<input type="checkbox" name="sothich" value="thể thao">thể thao
				<input type="checkbox" name="sothich" value="Wed">Wed
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="submit" value=" hiển thị">
				<input type="reset" value="reset">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>