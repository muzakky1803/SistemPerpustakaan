  <!-- Begin Page Content -->
<div class="container-fluid">
  	<!-- Page Heading -->
  	<div class="d-sm-flex align-items-center justify-content-between mb-4">
  		<h1 class="h3 mb-0 text-gray-800"><?php echo $title;?></h1>
  	</div>

      <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Buku</h6>
                </div>
                <div class="card-body">
                    <span style="color:green" id="income"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Peminjam</h6>
                </div>
                <div class="card-body">
                    <span style="color:red" id="outcome"></span>
                </div>
            </div>
        </div>
    </div>

  	<div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Panduan</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-light">1. Satu peminjam hanya satu buku</li>
						<li class="list-group-item list-group-item-light">2. Satu buku hanya satu kategori</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  

</script>