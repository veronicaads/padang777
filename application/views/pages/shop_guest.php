<html>

<head>
	<?php 
	echo $css;
	echo $js;
?>
</head>

<body>
	<div class="container">
		<?php echo $navbar_guest; ?>
		<br>
		<br>
		<div class="row">
			<br>
			<br>
			<div class="dropdown">
				<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-info" data-target="#" href="/page.html">
					Kategori Menu
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
					<li>
						<?php echo form_open('shop/menu_ayam', array('id'=>'ayamform')); ?>
							<input type="hidden" name="ayam" value="ayam">
						</form>
						<a href="#" onClick="document.getElementById('ayamform').submit();">Ayam</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_ikan', array('id'=>'ikanform')); ?>
							<input type="hidden" name="ikan" value="ikan">
						</form>
						<a href="#" onClick="document.getElementById('ikanform').submit();">Ikan</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_sapi', array('id'=>'sapiform')); ?>
							<input type="hidden" name="sapi" value="sapi">
						</form>
						<a href="#" onClick="document.getElementById('sapiform').submit();">Sapi</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_pelengkap', array('id'=>'pelengkapform')); ?>
							<input type="hidden" name="pelengkap" value="pelengkap">
						</form>
						<a href="#" onClick="document.getElementById('pelengkapform').submit();">Pelengkap</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_sayuran', array('id'=>'sayuranform')); ?>
							<input type="hidden" name="sayuran" value="sayuran">
						</form>
						<a href="#" onClick="document.getElementById('sayuranform').submit();">Sayuran</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_dingin', array('id'=>'dinginform')); ?>
							<input type="hidden" name="sayuran" value="sayuran">
						</form>
						<a href="#" onClick="document.getElementById('dinginform').submit();">Minuman Dingin</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_panas', array('id'=>'panasform')); ?>
							<input type="hidden" name="panas" value="panas">
						</form>
						<a href="#" onClick="document.getElementById('panasform').submit();">Minuman Panas</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_botol', array('id'=>'botolform')); ?>
							<input type="hidden" name="botol" value="botol">
						</form>
						<a href="#" onClick="document.getElementById('botolform').submit();">Minuman Botol</a>
					</li>
					<li>
						<?php echo form_open('shop/menu_juice', array('id'=>'juiceform')); ?>
							<input type="hidden" name="juice" value="juice">
						</form>
						<a href="#" onClick="document.getElementById('juiceform').submit();">Juice</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($menu as $row) {	
					$gambar = $row['Gambar'];?>


					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="my-list">
							<img src="<?php echo base_url('');?>/<?php echo $gambar;?>" alt="dsadas">
							<h3>
								<?php echo $row['NamaMenu']; ?>
								<?php $harga = sprintf('%0.3f',$row['Harga']/1000); ?>
							</h3>
							<span>
								<?php echo 'Rp '.$harga.',00';?> </span>
							<div class="offer">
								<div class="col-md-12 col-sm-12 col-xs-6 review">
									<?php for ($i=0;$i<$row['Rating'];$i=$i+1){ ?>
									<i class="fa fa-star" aria-hidden="true"></i>
									<?php } ?>
									<?php for ($j=0;$j<5-$row['Rating'];$j=$j+1){ ?>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<?php } ?>
								</div>
							</div>
							<div class="detail">
								<br>
								<img src="<?php echo base_url('');?>/<?php echo $gambar;?>" alt="dsadas">
								<br>
								<br>
								<button href="#" class="btn btn-info">Pesan</button>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#produkdetail">Detail</button>
								<div class="modal fade product_view" id="produkdetail" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<a href="#" data-dismiss="modal" class="class pull-right">
													<span class="fa fa-remove"></span>
												</a>
												<h3 class="modal-title">
													<?php echo $row['NamaMenu']; ?>
												</h3>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-6 product_img">
														<img src="<?php echo base_url('');?>/<?php echo $gambar;?>" class="img-responsive">
													</div>
													<div class="col-md-6 product_content">
														<h4>Kategori Id:
															<span>
																<?php echo $row['IDKategoriMenu']; ?>
															</span>
														</h4>
														<p>
															<?php echo $row['Deskripsi'];?>
														</p>
														<h3 class="cost">
															<?php echo 'Rp. '.$harga.',00';?>
														</h3>
														<div class="container">
															<div class="row">
																<div class="col-xs-3 col-xs-offset-3">
																	<div class="input-group number-spinner">
																		<span class="input-group-btn data-dwn">
																			<button class="btn btn-default btn-info" data-dir="dwn">
																				<span class="fa fa-minus"></span>
																			</button>
																		</span>
																		<input type="text" class="form-control text-center" value="1" min="-10" max="40">
																		<span class="input-group-btn data-up">
																			<button class="btn btn-default btn-info" data-dir="up">
																				<span class="fa fa-plus"></span>
																			</button>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<br>
														<div class="space-ten"></div>
														<div class="btn-ground">
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#keranjang">
																<span class="fa fa-shopping-cart"> Taruh Keranjang</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div id="keranjang" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Close</h4>
				</div>
				<div class="modal-body">
					<button type="button" class="btn btn-primary pull-left">
						<i class="fa fa-chevron-left"></i> Lanjutkan Belanja
					</button>
					<button type="button" class="btn btn-primary pull-right">Pembayaran
						<i class="fa fa-chevron-right"> </i>
					</button>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php
	echo $footer;
?>

</body>

</html>
