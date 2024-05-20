<?php 
    include "database/connection.php";
?>
<div class="container-fluid px-4">
    <div class="row">
<?php 
    include "database/connection.php";
?>
<div class="container-fluid px-4">
    <div class="row">
        <div class="col">
            <h3>Bagian</h3>
        </div>
        <div class="col">
            <a href="?page=bagiantambah" class="btn btn-success float-end">
                <i class="fa fa-plus-circle"></i>
                Tambah</a>
            </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <?php 
            $selectSQL = "SELECT * FROM bagian";
            $result = mysqli_query($connection,$selectSQL);
            if (!$result) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo mysqli_error($connection) ?>
            </div>
        <?php 
        return;
            }
            if (mysqli_num_rows($result)==0) {
                ?>
                <div class="alert alert-light" role="alert">
                    Data Kosong
                </div>
                <?php 
                return;
            }
            ?>
        
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Bagian</th>
            <?php 
            $selectSQL = "SELECT * FROM bagian";
            $result = mysqli_query($connection,$selectSQL);
            if (!$result) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo mysqli_error($connection) ?>
            </div>
        <?php 
        return;
            }
            if (mysqli_num_rows($result)==0) {
                ?>
                <div class="alert alert-light" role="alert">
                    Data Kosong
                </div>
                <?php 
                return;
            }
            ?>
        
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Bagian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <th scope="row">1</th>
                        <td>HRD</td>
                    </tr>
                    <tr class="align-middle">
                        <th scope="row">2</th>
                        <td>Finance</td>
                    </tr>
                    <?php 
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {        
                   ?>
                   <tr class="align-middle">
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $row["nama"] ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                            Ubah
                        </a>
                        <a href="?page=bagianhapus&id= <?php echo $row['id'] ?>" onclick="javascript: return config('Konfirmasi data akan dihapus?');" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Hapus
                        </a>
                    </td>
                   </tr>
                    <?php 
                    } 
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>