<?php 
// include"../header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>cetak</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h3 align="center">laundryku<b><br/>LAPORAN LAUNDRY</b></h3>
	<hr>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>ID TRANSAKSI</th>
		<th>ID OUTLET</th>
        <th>ID MEMBER</th>
		<th>NAMA_MEMBER</th>
        <th>ALAMAT</th>
		<th>TGL TRANSAKSI</th>
		<th>TGL BAYAR</th>
        <th>DIBAYAR</th>
	</tr>
	<?php
include "koneksi.php";
$laundry = mysqli_query($conn, "select * from transaksi where id_transaksi='" . $_GET['id_transaksi'] . "'");
$i = 1;
$total = 0;
$dta = mysqli_fetch_array($laundry);
?>
<tr>
<td align="center"><?php echo $i ?></td>
    <td align="center"><?php echo $dta['id_transaksi'] ?></td>
    <td align="center"><?php echo $dta['id_outlet'] ?></td>
    <td align="center"><?php echo $dta['id_member'] ?></td>
	<td align="center"><?php echo $dta['nama_member'] ?></td>
    <td align="center"><?php echo $dta['alamat'] ?></td>
    <td align="center"><?php echo $dta['tgl_transaksi'] ?></td>
    <td align="center"><?php echo $dta['tgl_bayar'] ?></td>
    <td align="center"><?php echo $dta['dibayar'] ?></td>
</tr>
	

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Malang , <?= date('d/m/y') ?> <br/>
				ADMIN,
			<br/>
			<br/>
			<br/>
		<p>__________</p>
		</td>
	</tr>
</table>


	<a  href="#" target="" onclick="window.print();"><button class="print">CETAK</button></a>
</body>
</html>