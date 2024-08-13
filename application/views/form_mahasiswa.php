<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Input Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .card {
            margin-left: 20rem;
        }
    </style>
  </head>
  <body>

    <div class="card w-50 mb-3 mt-5">
        <div class="card-body">
            <h1 class="text-center mb-3 fw-bold">Form Input Data Mahasiswa</h1>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php elseif ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form id="mahasiswaForm" action="<?php echo base_url('mahasiswa/save'); ?>" method="post">              
                <div class="row mb-3">
                    <label for="nim" class="col-sm-3 col-form-label col-form-label-sm">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-3 col-form-label col-form-label-lg">Kelas</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas Anda" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-3 col-form-label col-form-label-lg">Program Studi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukan Program Studi Anda" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function resetForm() {
            document.getElementById('mahasiswaForm').reset();
        }
    </script>
  </body>
</html>
