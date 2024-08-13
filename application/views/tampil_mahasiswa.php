<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .card {
            margin-left: 11rem;
        }
    </style>
  </head>
  <body>
    <div class="card w-75 mb-3 mt-5">
        <div class="card-body">
            <h1 class="text-center mb-4 fw-bold">Tampil Data Mahasiswa</h1>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php elseif ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
            <table class="table table-hover" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Program Studi</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($mahasiswa)): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($mhs->nim); ?></td>
                                <td><?php echo htmlspecialchars($mhs->nama); ?></td>
                                <td><?php echo htmlspecialchars($mhs->kelas); ?></td>
                                <td><?php echo htmlspecialchars($mhs->prodi); ?></td>
                                <td><?php echo htmlspecialchars($mhs->email); ?></td>
                                <td>
                                    <a href="<?php echo base_url('mahasiswa/hapus/' . $mhs->nim); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>
