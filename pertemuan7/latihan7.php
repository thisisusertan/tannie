<html>
<head>
    <title>DATA MAHASISWA</title>

</head>
<body>
</html>
<?php
$mahasiswa = [
   ["172571","Adriyan sah pitran","17.3A.03"],
   ["172572","widya putri rahayu","17.3A.03"],
   ["172573","ridho firmansyah","17.3A.03"],
   ["172574","rangga aji pramudya","17.3A.03"],
   ["172575","fernando hasudungan siregar","17.3A.03"],
   ["172576","duta arrasyid","17.3A.03"],
   ["172577","Renal ali","17.3A.03"],
   ["172578","glen justin","17.3A.03"],
   ["172579","arla maulana","17.3A.03"],
    ["172589","kevin nabil noor","17.3A.03"],
];

echo "<table border=1>";
echo "<tr><th>NIM</th><th>Nama</th><th>Kelas</th></tr>";

foreach ($mahasiswa as $mhs) {
     echo "<tr><td>$mhs[0]</td><td>$mhs[1]</td><td>$mhs[2]</td></tr>";
}

echo "</table>";
?>

</body>
</html>