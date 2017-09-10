<?php echo $judul; ?> 
<button><?php echo anchor('Barang/input','Input Data') ?></button>
<hr/>
<table border="1">
<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga</th><th colspan="2">Tools</th></tr>
<?php
foreach ($barang as $b){
    echo "<tr>
            <td>$b->kode_barang</td>
            <td>$b->nama_barang</td>
            <td>$b->harga</td>
            <td>".anchor('barang/edit/'.$b->kode_barang,'Edit')."</td>
             <td>".anchor('barang/delete/'.$b->kode_barang,'Hapus')."</td>
            </tr>";
}
?>
</table>
