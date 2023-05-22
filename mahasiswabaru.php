<h3>Tambah Data User</h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="int" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim">
        <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJURUSAN" class="form-control" id="floatingInput" placeholder="Jurusan">
        <label for="floatingInput">Jurusan</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="Alamat">
        <label for="floatingInput">Alamat</label>
    </div>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Mahasiwa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>