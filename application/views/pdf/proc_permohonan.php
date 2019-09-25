<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<body style="margin:50px;">
  <table width="450" border="0" cellpadding="2" cellspacing="0" align="center">
    <tr colspan="4">
      <td></td>
      <td></td>
      <td></td>
      <td><p style="text-align: right;">Jakarta, <?php echo $tanggal; ?></p></td>
    </tr>
    <tr colspan="4">
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr colspan="4">
      <td>Lampiran</td>
      <td>:</td>
      <td>-</td>
      <td></td>
    </tr>
    <tr colspan="4">
      <td>Perihal</td>
      <td>:</td>
      <td>Permohonan Izin Pembelian Barang</td>
      <td></td>
    </tr>
  </table>

  <table style="margin-top:30px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
    <tr>
      <td>Kepada Yth.</td>
    </tr>
    <tr>
      <td>Manager ICT</td>
    </tr>
    <tr>
      <td>PT. Pertamina Drilling Services Indonesia</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>GRAHA PDSI, Jl. Matraman Raya No.87,</td>
    </tr>
    <tr>
      <td>RT.1/RW.5, Palmeriam, Kec. Matraman,</td>
    </tr>
    <tr>
      <td>Jakarta Timur 13140</td>
    </tr>

  </table>

  <table style="margin-top:20px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
  <?php foreach ($get as $a) { ?>
    <tr>
      <td>
        <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Sehubungan dengan adanya kebutuhan pembelian barang di PT. Pertamina Drilling Services Indonesia, melalui surat ini kami memohon bantuan kepada fungsi ICT PT. Pertamina Drilling Services Indonesia untuk memberikan izin pembelian barang pada tanggal <?php echo $tanggal; ?>. Berikut ini rincian barang tersebut :
        </p>
      </td>
    </tr>
    <?php } ?>
  </table>

  <table style="margin-top:20px" width="450" border="1" cellpadding="2" cellspacing="0" align="center">
    <tr align="center">
      <th class="header">No. </th>
      <th class="header">Jenis </th>
      <th class="header">Merek </th>
      <th class="header">Taksiran Harga </th>
      <th class="header">Metode Pembayaran </th>
    </tr>
    <?php
        $no = 1;
        foreach ($item_detail as $a){
    ?>
    <tr align="center">
      <td><?= $no++ ?></td>
      <td><?= $a->jenis ?></td>
      <td><?= $a->merek ?></td>
      <td><?= "Rp ".number_format($a->value_price,2,',','.'); ?></td>
      <td><?= $a->payment_method ?></td>
    </tr>
    <?php } ?>
  </table>

  <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Demikian surat permohonan ini kami sampaikan. Atas perhatian dan kerjasamanya kami ucapkan terimakasih.
  </p>
  <p>&nbsp;</p>

  <table style="margin-top:20px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
    <tr>
      <td style="text-align: center; width:250px;">Pemohon</td>
      <td style="text-align: center;"></td>
      <td style="text-align: center; width:250px;">Menyetujui</td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr align="center">
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr align="center">
      <td style="text-align: center; width:250px;">( ................................ )</td>
      <td style="text-align: center;"></td>
      <td style="text-align: center; width:250px;">( ................................ )</td>
    </tr>
  </table>

</body>
</html>