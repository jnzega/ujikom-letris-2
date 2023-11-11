<style>
/*** Table Styles **/

.table-fill {
    background: white;
    border-radius: 3px;
    border-collapse: collapse;
    height: 320px;
    margin: auto;
    max-width: 98%;
    padding: 5px;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    animation: float 5s infinite;
}

th {
    color: #D5DDE5;
    ;
    background: #1d1b31;
    border-bottom: 4px solid #9ea7af;
    border-right: 1px solid #343a45;
    font-size: 23px;
    font-weight: 100;
    padding: 24px;
    text-align: left;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    vertical-align: middle;
}

th:first-child {
    border-top-left-radius: 3px;
}

th:last-child {
    border-top-right-radius: 3px;
    border-right: none;
}

tr {
    border-top: 1px solid #C1C3D1;
    border-bottom-: 1px solid #C1C3D1;
    color: #666B85;
    font-size: 16px;
    font-weight: normal;
    text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
    background: #4E5066;
    color: #FFFFFF;
    border-top: 1px solid #22262e;
}

tr:first-child {
    border-top: none;
}

tr:last-child {
    border-bottom: none;
}

tr:nth-child(odd) td {
    background: #EBEBEB;
}

tr:nth-child(odd):hover td {
    background: #4E5066;
}

tr:last-child td:first-child {
    border-bottom-left-radius: 3px;
}

tr:last-child td:last-child {
    border-bottom-right-radius: 3px;
}

td {
    background: #FFFFFF;
    padding: 20px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 18px;
    text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
    border-right: 1px solid #C1C3D1;
}

td:last-child {
    border-right: 0px;
}

th.text-left {
    text-align: left;
}

th.text-center {
    text-align: center;
}

th.text-right {
    text-align: right;
}

td.text-left {
    text-align: left;
}

td.text-center {
    text-align: center;
}

td.text-right {
    text-align: right;
}
</style>
<table class="table-fill">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Kegiatan PKL</th>
        </tr>
    </thead>
    <tbody class="table-hover">
        <?php
            $no =1;
            $data = file('./infoUser/catatanUser.txt', FILE_IGNORE_NEW_LINES);
            $user = $_SESSION['nis']."|".$_SESSION['nama_lengkap'];
            foreach($data as $value){
                $pecah = explode("|", $value);
                @$key = $pecah['0']."|".$pecah['1'];
                if($key==$user){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $pecah['2']; ?></td>
            <td><?= $pecah['3']; ?></td>
            <td><?= $pecah['4'];?></td>
            <td><?= $pecah['5']; ?></td>
        </tr>
        <?php } } ?>
    </tbody>
</table>