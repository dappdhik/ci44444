<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <style>
        .container{
            padding: 15px;
            max-width: 800px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <!--container-->
    <div class="container"></div>

    <!--card-->
    <div class="card">
    <div class="card-header bg-secondary text-white">
    Data Pegawai
        </div>
            <div class="card-body">
                <!--search-->
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name= "Kata Kunci"placeholder="Apa Yang Ingin Anda Cari" aria-label="Apa Yang Ingin Anda Cari" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>   
                </div>
            </form>

                    <!--modal-->
            <!-- Tombol untuk membuka modal -->
            <button type="button" btn-sm class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                + Tambah Data Pegawai
            </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Form Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                         <!--nama-->
                        <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="Nama" class="form-control" id="inputNama">
                                </div>
                        </div>
                        <!--email-->
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail">
                                </div>
                        </div>
                        <!--bidang-->
                        <div class="mb-3 row">
                            <label for="inputBidang" class="col-sm-2 col-form-label">Bidang</label>
                                <div class="col-sm-10">
                                   <select id ="InputBidang" class="form-select"> 
                                    <option value="finance">Finance</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="hr">HR</option>
                                   </select>
                                </div>
                        </div>
                        <!--alamat-->
                        <div class="mb-3 row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="Alamat" class="form-control" id="inputAlamat">
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="tombolSimpan" >Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!--View Data-->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Bidang</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Bidang</td>
                    <td>Alamat</td>
                    <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
        </table> 

            </div>
        </div>
    <!--js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#tombolSimpan').on('click',function(){
            var $nama = $('#inputNama').val();
            var $email = $('#inputEmail').val();
            var $bidang = $('#inputBidang').val();
            var $alamat = $('#inputAlamat').val();
            
           $.ajax({
               url: "<?=site_url('pegawai/simpan')?>",
               type: "POST",  
               success:function(hasil){
                alert(hasil);
               } 
           });
        });
           
            
    </script>
</body>

</html> 
