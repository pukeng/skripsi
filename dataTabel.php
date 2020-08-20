<table class="table table-striped table-responsive-sm">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th>Nama Pelanggan</th>
            <th>Jenis Air</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>pH</th>
            <th>Kejernihan (NTU)</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include('koneksi.php');
        $nomor = 0;
        $data   = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1;");
        while ($row = mysqli_fetch_array($data)) {
            $no = $row['no'];
            $nomor++;
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jenis_air']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktu']; ?></td>
                <td><?php echo $row['ph']; ?></td>
                <td><?php echo $row['turbidity']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>