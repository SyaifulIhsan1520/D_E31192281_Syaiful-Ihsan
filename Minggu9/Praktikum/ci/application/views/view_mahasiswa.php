<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heading Helper HTML</title>
</head>
<body>
    echo heading("Hello CI",1);
    echo heading("Hello CI",2);
    echo heading("Hello CI",3);
    echo heading("Hello CI",4);
    echo heading("Hello CI",5);
    echo heading("Hello CI",6);
    <?php
foreach($siswa as $row)
{
echo "Nama : ".$row['nama'];
echo "<br/>";
echo "Prodi : ".$row['prodi'];
echo "<hr/>";
}?>

</body>
</html>