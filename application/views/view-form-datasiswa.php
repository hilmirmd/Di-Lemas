<html> 
    <head> 
    <title>Form Input Data Siswa Di-Lemas</title> 
</head> 

<body bgcolor="cyan"> 
    <center> 
        <?php //echo validation_errors(); 
        ?> 
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post"> 
            <table> 
        <tr > 
                    <th colspan="3" style="font-size:22px;"> 
                        Form Input Data Siswa D-LeMas
                    </th> 
        </tr>
        <tr> 
            <td colspan="3"> 
                        <hr> 
            </td> 
        </tr> 
        <tr align="left" > 
                    <th >Nama siswa</th> <th>:</th> 
            <td> 
                <input type="text" name="nama" id="nama"> 
                    <?= form_error('nama', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr> 
        <tr align="left"> 
                    <th>NIS</th> <th>:</th> 
            <td>
                <input type="text" name="nis" id="nis"> 
                    <?= form_error('nis', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr> 
        <tr align="left"> 
                    <th>Kelas</th> <th>:</th> 
            <td>
                <input type="text" name="kelas" id="kelas"> 
                    <?= form_error('kelas', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr> 
        <tr align="left"> 
                    <th>Tanggal lahir</th> <th>:</th> 
            <td>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"> 
                    <?= form_error('tanggal_lahir', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr> 
        <tr align="left"> 
                    <th>Tempat lahir</th> <th>:</th> 
            <td>
                <input type="text" name="tempat_lahir" id="tempat_lahir"> 
                    <?= form_error('tempat_lahir', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr> 
        <tr align="left"> 
                    <th>Alamat</th> <th>:</th> 
            <td>
                <input type="text" name="alamat" id="alamat"> 
                     <?= form_error('alamat', '<small style="color:black">','</small>'); ?>
            </td> 
        </tr>
        <tr align="left">
                <th>Jenis Kelamin</th> <th>:</th> 
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br>
        </tr> 
        <tr align="left"> 
                    <th>Agama</th> 
                    <th>:</th> 
            <td> 
                <select name="agama" id="agama"> 
                    <option value="#">Pilih Agama</option> 
                    <option value="islam">ISLAM</option> 
                    <option value="kristem">KRISTEN</option> 
                    <option value="katolik">KATOLIK</option> 
                    <option value="budha">BUDHA</option> 
                    <option value="hindu">HINDU</option> 
                    <option value="protestan">PROTESTAN</option> 
                    <option value="khonghucu">KHONGHUCU</option> 
                </select> 
            </td>
        </tr> 
        <tr> 
            <td colspan="3" align="center"><input type="submit" value="SUBMIT"> 
            </td> 
        </tr> 
            </table> 
        </form> 
    </center> 
</body>
</html>