<?php  
include "../include/head.php";
include_once '../controller/user.inc.php';
$pro = new User($db);
$stmt = $pro->readAll();
?>
<body class="sb-nav-fixed">
          <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Kriteria</li>
                        </ol>

    <div class="row">
        <div class="col-md-6 text-left">
            <h4>Data Pengguna</h4>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="location.href='user-baru.php'" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
    <br/>
    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">ID</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $row['id_pengguna'] ?></td>
    	    <td><?php echo $row['nama_lengkap'] ?></td>
    	    <td><?php echo $row['username'] ?></td>
            <td class="text-center">
					<a href="user-ubah.php?id=<?php echo $row['id_pengguna'] ?>" class="btn btn-info"><i class="fas fa-edit" aria-hidden="true"></i></a>
                </td>
					<td class="text-center">
                    <a href="user-hapus.php?id=<?php echo $row['id_pengguna'] ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></a>
			    </td>
            
            </tr>
    <?php
    }
    ?>
        </tbody>
    </table>
    
</div>
</main>
<?php include "../include/footer.php"; ?>
</div>
</div>
</div>


