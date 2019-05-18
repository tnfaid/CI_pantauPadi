
<!-- Start Page Content -->

<div class="row">
    <div class="col-lg-12">


        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-pencil"></i> &nbsp;Daun Edit <a href="<?php echo base_url('admin/crud_daun/all_daun_list') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-list"></i> All Data Daun </a>

            </div>
            <div class="panel-body table-responsive">

                <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                <?php if (isset($error_msg)): ?>
                    <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">�</span> </button>
                    </div>
                <?php endif ?>

                <form method="post" action="<?php echo base_url('admin/crud_daun/update_daun/'.$info_daun->id) ?>" class="form-horizontal" novalidate>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Jenis Tanaman</label>
                        <div class="col-sm-12">
                            <input type="text" name="jenis_tanaman" class="form-control" value="<?php echo $info_daun->jenis_tanaman; ?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Warna Daun</label>
                        <div class="col-sm-12">
                            <input type="text" name="warna_daun" class="form-control" value="<?php echo $info_daun->warna_daun; ?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-12" for="example-text">BWD Range</label>
                        <div class="col-sm-12">
                            <input type="text" name="bwd_range" class="form-control" value="<?php echo $info_daun->bwd_range; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Solusi</label>
                        <div class="col-sm-12">
                            <input type="text" name="solusi" class="form-control" value="<?php echo $info_daun->solusi; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Gambar Referensi</label>
                        <div class="col-sm-12">
                            <input type="text" name="pic_compare" class="form-control" value="<?php echo $info_daun->pic_compare; ?>">
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