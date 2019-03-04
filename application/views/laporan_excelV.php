  <?php
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan Data Transaksi Client.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%" style="font-size:13px;border:100px;font-family:Arial;">
 
      <thead>
 
           <tr>
                <th>No.SHM</th>
                <th>Nama Penjual</th>
                <th>Nama Pembeli</th>
                <th>Alamat Pembeli</th>
                <th>Kategori</th>
                <th>Proses Tahapan</th>
                <th>Tanggal</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($buku as $exel) { ?>
 
           <tr>
 
                <td><?php echo $exel->no_sertipikat; ?></td>
                <td><?php echo $exel->nm_penjual; ?></td>
                <td><?php echo $exel->nm_pembeli; ?></td>
                <td><?php echo $exel->almt_pembeli; ?></td>
                <td><?php echo $exel->kategori; ?></td>
                <td><?php echo $exel->proses; ?></td>
                <td><?php echo $exel->tanggal; ?></td>
                
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>