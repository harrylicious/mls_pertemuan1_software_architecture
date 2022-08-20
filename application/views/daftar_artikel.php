<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Calon Siswa 2022</h1>

    <table border="1">
        <thead>
            <td>ID</td>
            <td>Judul</td>
            <td>Konten</td>
            <td>Tgl. Rilis</td>
        </thead>
        <tbody>
            <?php
                foreach ($artikel as $row) {
                    ?>
                    <tr>
                        <td><?= $row->id; ?></td>
                        <td><?= $row->judul; ?></td>
                        <td><?= $row->konten; ?></td>
                        <td><?= $row->tgl_rilis; ?></td>
                    </tr>

                    <?php
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>