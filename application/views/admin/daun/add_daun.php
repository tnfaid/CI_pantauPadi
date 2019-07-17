
<!-- Start Page Content -->

<div class="row">
    <div class="col-lg-12">


        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-plus"></i> &nbsp;Add New Data Daun <a href="<?php echo base_url('admin/crud_daun/all_data_daun') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-list"></i> List Data Daun </a>

            </div>
            <div class="panel-body table-responsive">

                <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                <?php if (isset($error_msg)): ?>
                    <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                <?php endif ?>


                <form method="post" action="<?php echo base_url('admin/crud_daun/add_data_daun') ?>" class="form-horizontal" enctype="multipart/form-data" novalidate >
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Nama Penyakit</label>
                        <div class="col-sm-12">
                            <input type="text" name="nama_penyakit" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Kondisi</label>
                        <div class="col-sm-12">
                            <input type="text" name="kondisi" class="form-control" required data-validation-required-message="Kondisi sangat dibutuhakn">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Solusi</label>
                        <div class="col-sm-12">
                            <input type="text" name="solusi" class="form-control" required data-validation-required-message="Solusi is required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Nilai Warna</label>
                        <div class="col-sm-12">
                            <input type="text" name="value_warna" class="form-control" required data-validation-required-message="Nilai Warna is required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Usia (satuan hari)</label>
                        <div class="col-sm-12">
                            <input type="text" name="usia" class="form-control" required data-validation-required-message="Usia is required">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Gambar</label>
                        <div class="col-sm-12">
                            <td><input type="file" name="gambar"></td>
                        </div>
                    </div>

                    <!-- CSRF token -->
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                        </div>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
</div>

<!-- End Page Content -->