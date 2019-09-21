<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login </title>
	<style>
	body{
		background-image: url(1.png);
		background-size: cover;
		background-repeat: no-repeat;
	}
	body{	
		padding-top: 140px;
		padding-left: 15%;
	}
	input[type=text], select {
			  width: 90%;
			  background-color: white;
			  color: black;
			  padding: 10px 20px;
			  margin: 4px 0;
			}
</style>

</head>
<body>
	
	<h1>Form Registrasi</h1>

	 	<form>
	 		<table>
	 		<tr>
	 		<td>Nama</td>
	 		<td><input type="text" name="username" placeholder="username.." required="required"></td>
			</tr>

			<tr>
	 		<td>NIS</td>
	 		<td><input type="text" name="NIS" placeholder="NIS.." required="required"></td>
			</tr>

			<tr>
	 		<td>Kelas</td>
	 		<td><input type="text" name="kelas" placeholder="kelas.." required="required"></td>
			</tr>

			<tr>
	 		<td>Jurusan</td>
	 		<td><input type="text" name="jur" placeholder="jurusan.." required="required"></td>
			</tr>

			<tr>
	 		<td>Alamat</td>
	 		<td><input type="text" name="almt" placeholder="alamat.." required="required"></td>
			</tr>
	 		
			</table>

	 		<br>
	 		<button>Save</button> <button>Cancel</button>
	 		</center>

	 	</form>
</body>
</html>