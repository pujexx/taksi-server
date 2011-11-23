<html>
<head>
<title>Sistem Informasi Pemesanan Taksi</title>

<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
}
h1 {
	font-size: 10px;
}
.style3 {
	font-family: "Courier New", Courier, mono;
	font-weight: bold;
	color: #000000;
}
.style12 {font-size: 18px; font-family: fantasy; }
.style15 {font-size: 18px; font-family: fantasy; color: #FF0000; }
.style17 {font-family: "Times New Roman", Times, serif}
.style19 {
	font-size: 12px;
	font-family: "Courier New", Courier, mono;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<body>
<center>
<img src="<?php echo base_url(); ?>assets/image/images copy.jpg" width="1000" height="160">
<h4 align="center" class="style2">SELAMAT DATANG DI SISTEM INFORMASI PEMESANAN TAKSI
<hr align="center" color="#FF0000">
<span class="style12"><br>
</span>







<BR>

<PRE>
<FORM NAME="frmLogIn" METHOD="post" ACTION="<?php echo site_url('taksi/login') ?>"><div align="left"><p class="style19">Registered ADMIN log in:</p><p class="style19">Username	: <INPUT TYPE="text" NAME="phtuser">
Password:	: <INPUT TYPE="password" NAME="phtpass">

<!--<form method="post" action="<?php echo site_url('taksi/login'); ?>">

            <p>
				<label>Username<br>
				<input name="phtuser" type="text"></label>
			</p>
			<p>
				<label>Password<br>
				<input name="phtpass" type="password"></label>
			</p>
				<input name="submit" id="submit" class="button-primary" value="Log In" tabindex="100" type="submit"/>
			
    
</form>-->

 		<input type="submit" value="Submit"></p><PRE><div align="left" class="style19">New user please register<A HREF="signup.php"> here </A>
  
<table border="1" cellpadding="2">
    <thead>
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Waktu</td>
            <!--<td>No Handphone</td>-->
            <td>Tujuan</td>
            <td>Jumlah Orang</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data->result() as $row): ?>
        <tr>
            <td><?php echo $row->nama_pemesan; ?></td>
            <td><?php echo $row->alamat_pemesan; ?></td>
            <td><?php echo $row->waktu_pemesan; ?></td>
            <!--<td><?php echo $row->nomor_telephon; ?></td>-->
            <td><?php echo $row->tujuan; ?></td>
            <td><?php echo $row->jumlah_orang; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

  

  </div></PRE><blockquote>&nbsp;</blockquote></div></FORM>
</PRE>

<th align="center" valign="bottom" bgcolor="#FF0000"><span class="style15"><MARQUEE>     <span class="style17">  Sistem Informasi PEMESANAN TAKSI UNTUK ADMIN     </span>     </MARQUEE>
  </span>
  <h6><span class="style12">  </span></h6>
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p>  
  <p align="center">&nbsp;</p>
     <hr align="center" color="#FF0000">     
     <p align="center" class="style3">copyright@2011</p>





</body>
</html>