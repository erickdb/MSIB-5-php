<!-- File Objek / Kumpulan Bidang-->
<?php 
require_once 'class/bentuk2d.php';
require_once 'class/linkaran.php';
require_once 'class/persegi_panjang.php';
require_once 'class/segitiga.php';
// object
$lingkaran = new lingkaran(50);
$persegipanjang = new persegi_panjang(9,7);
$segitiga = new segitiga(20,8,9);

// array
$object = [$lingkaran,$persegipanjang,$segitiga];

// cetak
echo "<center>";
echo "<h1>Bidang - bidang</h1>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>No</th> <th>Nama Bidang</th> <th>Keterangan</th> <th>Luas Bidang</th> <th>Keliling Bidang</th> </tr>";
echo "</thead>";
echo "<tbody>";
foreach ($object as $o =>$ject) {
    echo "<tr>";
    echo "<td>" . ($o + 1) . "</td>";
    echo "<td>" . $ject->namaBidang() . "</td>";
    echo "<td>" . "" . "</td>"; // Keterangan diisi dengan string kosong
    echo "<td>" . $ject->luasBidang() . "</td>";
    echo "<td>" . $ject->kelilingBidang() . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</center>";
?>