<html>
<head> 
<title>Tampil Data Matakuliah</title>
</head>
<body>
<center>
<table>
    <tr>
        <th colspan="3">
        Tampil Data Mata Kuliah
        </th>
    </tr>
    <tr>
        <td colspan="3">
        <hr>
        </td>
    </tr>
    <tr>
        <th>Kode MTK</th>
        <th>:</th>
        <td>
        <?= $kode; ?>
        </td>
    </tr>
    <tr>
        <td>Nama MTK</td>
        <td>:</td>
        <td>
        <div class="suka" style="max-width:700px;
    height: 60vh;">
      <div class="container" style="height: 100%;
      overflow: auto;">
    <pre style="font-family:times new roman; font-size: 14px;"><?= $nama; ?></pre>
      </div>
  </div>
        </td>
    </tr>
    </tr>
    <tr>
        <td>SKS</td>
        <td>:</td>
        <td>
        <?= $sks; ?>
        </td>
  
    <tr>
        <td colspan="3" align="center">
            <a href="<?= base_url('matakuliah'); ?>">   
            Kembali</a>
        </td> 
    42
    </tr>
</table>


</center>


</body>
</html>