<div class="container">
	<center>
		<table>
			<?php
			foreach ($useraktif as $u) {
			?>
				<tr>
					<td nowrap="nowrap">Terima Kasih <b><?= $u->nama; ?></b></td>
				</tr>
				<tr>
					<td>Buku yang ingin Anda pinjam adalah sebagai berikut : </td>
				</tr>

			<?php
			}
			?>
			<tr>
				<td>
					<div class="table-responsive full-width">
						<table class="table table-bordered table-striped table-hover">
							<tr>
								<th>No.</th>
								<th>Buku</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun</th>
							</tr>
							<?php
							$no = 1;
							foreach ($temp as $t) {
								?>
								<tr>
									<td><?= $no; ?></td>
									<td>
										<img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded"
											 alt="No Picture" width="10%">
									</td>
									<td nowrap="nowrap"><?= $t['pengarang']; ?></td>
									<td nowrap="nowrap"><?= $t['penerbit']; ?></td>
									<td nowrap="nowrap"><?= substr($t['tahun_terbit'], 0, 4); ?></td>

								</tr>

								<?php
								$no++;
							}
							?>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>
				</td>
			</tr>
		</table>
	</center>
</div>
