<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table {
			margin: 20px auto;
			border-collapse: collapse;
			width: 80%;
			max-width: 800px;
		}
		th, td {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: center;
			font-size: 16px;
			color: #333;
		}
		th {
			background-color: #f2f2f2;
			font-weight: bold;
		}
		tr:last-child td {
			background-color: #f2f2f2;
			font-style: italic;
			font-size: 14px;
			color: #666;
		}
	</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 align="center">Belanja Online</h3>
            </div>
        </div>
    </div>

    <form action="proses.php" method="post">
        <div class="form-group row">
            <label for="" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
                <input id="" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="product" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
                    <label for="radio_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="product" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
                    <label for="radio_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="product" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                    <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
                <input id="" name="quantity" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <table>
		<thead>
			<tr>
				<th>Produk</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>TV</td>
				<td>2.000.000</td>
			</tr>
			<tr>
				<td>Kulkas</td>
				<td>3.000.000</td>
			</tr>
			<tr>
				<td>Mesin Cuci</td>
				<td>1.500.000</td>
			</tr>
			<tr>
				<td colspan="2">Harga sewaktu-waktu dapat berubah</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
