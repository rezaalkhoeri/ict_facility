<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<body style="margin:20px;">
    <table width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr colspan="4">
        <td></td>
        <td></td>
        <td></td>
        <td><p style="text-align: right;">Jakarta, <?php echo $tanggal; ?></p></td>
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
        <td>Berita Acara Serah Terima Barang</td>
        <td></td>
      </tr>
    </table>
    <table style="margin-top:10px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr>
        <td>Kepada Yth.</td>
      </tr>
      <tr>
        <td>Manager ICT</td>
      </tr>
      <tr>
        <td>PT. Pertamina Drilling Services Indonesia</td>
      </tr>
    </table>
    <table style="margin-top:20px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr>
        <td>Kami yang bertanda tangan dibawah ini, &nbsp;Pada tanggal <?php echo $tanggal; ?></td>
      </tr>
    </table>
    <?php foreach ($get as $a) { ?>
    <table style="margin-top:0px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $a->giver ?></td>
        <td></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>___________________________________</td>
        <td></td>
      </tr>
      <tr>
        <td>Departmen</td>
        <td>:</td>
        <td>___________________________________</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="4">  Selanjutnya disebut PIHAK PERTAMA</td>
      </tr>
    </table>
    <table style="margin-top:10px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $a->recipient ?></td>
        <td></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>___________________________________</td>
        <td></td>
      </tr>
      <tr>
        <td>Departmen</td>
        <td>:</td>
        <td>___________________________________</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="4">  Selanjutnya disebut PIHAK KEDUA</td>
      </tr>
    </table>
    <?php } ?>

    <table style="margin-top:20px" width="450" border="0" cellpadding="2" cellspacing="0" align="center">
      <tr>
        <p style="text-align:justify;">
          <td>PIHAK PERTAMA menyerahkan barang kepada PIHAK KEDUA, dan PIHAK KEDUA menyatakan telah menerima barang dari PIHAK PERTAMA berupa daftar terlampir :</td>
        </p>
      </tr>
    </table>

    <table style="margin-top:20px" width="450" border="1" cellpadding="2" cellspacing="0" align="center">
      <tr align="center">
        <th class="header">No. </th>
        <th class="header">Jenis </th>
        <th class="header">Merek </th>
        <th class="header">Asset Number </th>
        <th class="header">Serial Number </th>
        <th class="header">Kondisi </th>
      </tr>
      <?php
          $no = 1;
          foreach ($item_detail as $a){
      ?>
      <tr align="center">
        <td><?= $no++ ?></td>
        <td><?php echo $a->jenis; ?></td>
        <td><?php echo $a->merek; ?></td>
        <td><?php echo $a->asset_number; ?></td>
        <td><?php echo $a->serial_number; ?></td>
        <td><?php echo $a->condition; ?></td>
      </tr>
      <?php } ?>
    </table>

    <table style="margin-top:20px" width="450" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td>
          <p style="text-align:justify;">
          Demikianlah berita acara serah terima barang ini di perbuat oleh kedua belah pihak, adapun barang-barang tersebut dalam keadaan baik dan cukup, sejak penandatanganan berita acara ini, maka barang tersebut, menjadi tanggung jawab PIHAK KEDUA, memlihara / merawat dengan baik serta dipergunakan untuk keperluan (tempat dimana barang itu dibutuhkan).
          </p>
        </td>
      </tr>
    </table>

    <table style="margin-top:40px" width="450" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td style="text-align:center">PIHAK PERTAMA</td>
        <td style="text-align:center" width="150px"><br></td>
        <td style="text-align:center">PIHAK KEDUA</td>
      </tr>
      <tr>
        <td style="text-align:center">Yang Menyerahkan</td>
        <td style="text-align:center"></td>
        <td style="text-align:center">Yang Menerima</td>
      </tr>
      <tr>
        <td style="text-align:center"><br></td>
        <td style="text-align:center"></td>
        <td style="text-align:center"></td>
      </tr>
      <tr>
        <td style="text-align:center"><br></td>
        <td style="text-align:center"></td>
        <td style="text-align:center"></td>
      </tr>
      <tr>
        <td style="text-align:center"><br></td>
        <td style="text-align:center"></td>
        <td style="text-align:center"></td>
      </tr>
      <tr>
        <td style="text-align:center"><br></td>
        <td style="text-align:center"></td>
        <td style="text-align:center"></td>
      </tr>
      <tr>
        <td style="text-align:center">(.............................................)</td>
        <td style="text-align:center"></td>
        <td style="text-align:center">(.............................................)</td>
      </tr>
    </table>
</body>
</html>
