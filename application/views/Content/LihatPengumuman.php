<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

    <div class="page page-dashboard">

        <div class="pageheader">

            <h2> SMPN 2 Sungai Penuh<span></span></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home">Beranda</i></a>
                    </li>
                    
                </ul>

                <div class="page-toolbar">
                    <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
                        <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                    </a>
                </div>

            </div>

        </div>
		
		<!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-md-12">
               <!-- tile -->
			   <a href="<?php echo base_url('Pengumuman/Tambah'); ?>" type="button" class="btn btn-ef btn-ef-2 btn-ef-2-primary btn-ef-2a mb-10">Tambah Pengumuman</a>
                <section class="tile">
					
                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Kelola </strong> Pengumuman Sekolah</h1>
                        <ul class="controls">
                            
                            <li class="dropdown">

                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>

                                <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                    <li>
                                        <a role="button" tabindex="0" class="tile-toggle">
                                            <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                            <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-refresh">
                                            <i class="fa fa-refresh"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-fullscreen">
                                            <i class="fa fa-expand"></i> Fullscreen
                                        </a>
                                    </li>
                                </ul>

                            </li>
                             
                        </ul>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-custom" id="editable-usage">
							
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Dari</th>
									<th>Sampai</th> 
                                    <th style="width: 160px;" class="no-sort">Aksi</th>
                                </tr>
                                </thead>
								<?php
								$no= 1;
								if($pengumuman)
									foreach($pengumuman as $b) :
							
								?> 

                                <tbody>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $b->judul; ?></td> 
                                    <td><?php echo $b->isi; ?></td>
                                    <td><?php echo $b->dari; ?></td>
									<td><?php echo $b->sampai; ?></td> 
                                    <td class="actions">
									<a href="<?php echo site_url() ?>Pengumuman/edit/<?php echo $b->id_pengumuman;?>"><span class="label bg-danger">Ubah</span></a>
									<a role="button" tabindex="0" onclick="deletePengumuman(<?php echo $b->id_pengumuman;?>)"><span class="label bg-drank">Hapus</span></a>
									</td>
                                </tr>
                                
                                </tbody>
								<?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!-- /tile body -->

                </section>



            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

    </div>

    
</section>
<!--/ CONTENT -->

<script type="text/javascript">
    function deletePengumuman(id) {
        swal({
            title: "Anda yakin akan menghapus data ini ?",
            text: "Data yang telah dihapus tidak dapat dikembalikan!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Hapus!',
            cancelButtonText: "Batal",
            confirmButtonClass: "btn-danger",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                window.location = "<?php echo site_url() ?>Pengumuman/hapus/" + id;
            } else {
                swal("Cancel hapus data", "error");
            }
        });
    }
</script>