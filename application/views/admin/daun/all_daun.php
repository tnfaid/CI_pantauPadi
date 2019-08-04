
<!-- Start Page Content -->


        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>  All Data Daun


                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/crud_daun/') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;New Daun</a> &nbsp;
                <?php else: ?>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/crud_daun/') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;New User</a>
                    <?php endif; ?>
                <?php endif ?>

            </div>

            <div class="panel-body table-responsive">

                <?php $msg = $this->session->flashdata('msg'); ?>
                <?php if (isset($msg)): ?>
                    <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                <?php endif ?>

                <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                <?php if (isset($error_msg)): ?>
                    <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                <?php endif ?>
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Gambar</th>
                        <th>Nama Penyakit</th>
                        <th>Penulis</th>
                        <th>Usia</th>
                        <th>Warna</th>
                        <th>Tanggal Upload</th>
                        <th>Kondisi</th>
                        <th>Solusi</th>
                        
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Action</th>
                        <th>Gambar</th>
                        <th>Nama Penyakit</th>
                        <th>Penulis</th>
                        <th>Usia</th>
                        <th>Warna</th>
                        <th>Tanggal Upload</th>
                        <th>Kondisi</th>
                        <th>Solusi</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    <?php foreach ($all_daun as $daun): ?>

                        <tr>
                            <td class="text-nowrap">

                                <?php if ($this->session->userdata('role') == 'admin'): ?>

                                    <a href="<?php echo base_url('admin/crud_daun/update_daun/'.$daun['id']) ?>"><button type="button" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></button></a>

                                    <a href="<?php echo base_url('admin/crud_daun/delete_daun/'.$daun['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>


                                <?php else: ?>

                                    <!-- check logged user role permissions -->

                                    <?php if(check_power(2)):?>

                                        <a href="<?php echo base_url('admin/crud_daun/update_daun/'.$daun['id']) ?>"><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></button></a>

                                    <?php endif; ?>

                                    <?php if(check_power(3)):?>


                                        <a href="<?php echo base_url('admin/crud_daun/delete_daun/'.$daun['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>

                                    <?php endif; ?>

                                <?php endif ?>
                            </td>
                             <td class="text-center"> 
                            <img class="img-thumbnail" src="<?php echo base_url('webService/'.$daun['gambar']) ?>" height="64" width="64">  
                            </td>
                            <td><?php echo $daun['nama_penyakit']; ?></td>
                            <td><?php echo $daun['penulis']; ?></td>
                            <td><?php echo $daun['usia']; ?></td>
                            <td><?php echo $daun['value_warna']; ?></td>
                            <td><?php echo $daun['tanggal_upload']; ?></td>
                            <td width="10%"><?php echo $daun['kondisi'];?></td>
                            <td width="10%"><?php echo $daun['solusi'];?></td>
                            

<!--                            <td>-->
<!--                                --><?php //if ($user['status'] == 0): ?>
<!--                                    <div class="label label-table label-danger">Inactive</div>-->
<!--                                --><?php //else: ?>
<!--                                    <div class="label label-table label-success">Active</div>-->
<!--                                --><?php //endif ?>
<!--                            </td>-->
<!--                            <td width="10%">-->
<!--                                --><?php //if ($user['role'] == 'admin'): ?>
<!--                                    <div class="label label-table label-info"><i class="fa fa-user"></i> admin</div>-->
<!--                                --><?php //else: ?>
<!--                                    <div class="label label-table label-success">user</div>-->
<!--                                --><?php //endif ?>
<!--                            </td>-->

<!--                            <td>--><?php //echo my_date_show_time($user['created_at']); ?><!--</td>-->
                            
                        </tr>

                    <?php endforeach ?>

                    </tbody>


                </table>
            </div>


        </div>
    </div>
</div>

</div>

<!-- End Page Content -->