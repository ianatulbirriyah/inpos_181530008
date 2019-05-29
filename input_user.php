<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="id_user" class=" form-control-label">ID User</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="id_user" name="id_user" placeholder="Enter ID User..."
                                class="form-control">
                            <span class="help-block text-danger validasi-id_user">ID User Belum Diisi</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nama_user" class=" form-control-label">Nama User</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="nama_user" name="nama_user" placeholder="Enter Nama_user..."
                                class="form-control">
                            <span class="help-block text-danger validasi-nama_user">Nama User Belum Diisi</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Enter Email..."
                                class="form-control">
                            <span class="help-block text-danger validasi-email">Email Belum Diisi</span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="lev_user" class=" form-control-label">Level User</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class = "form-control" id = "lev_user" name ="lev_user">
                                <option value = ""> -- Pilih --</option>
                                <option value = "Administrator">Administrator</option>
                                <option value = "Kasir">Kasir</option>
                            </select>
                            <span class="help-block text-danger validasi-lev_user">Level User Belum Diisi</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" id="btn-simpan" class="btn btn-success">Simpan</button>
                    <button type="button" id="btn-update" class="btn btn-success">Update</button>
                    <button type="reset" id="btn-batal" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>