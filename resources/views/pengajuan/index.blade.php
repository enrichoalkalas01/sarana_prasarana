@extends('layouts.master')

@section('title', 'Pengajuan Barang')

@section('content')

<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">FORM PENGAJUAN BARANG</h3>
					</div>
					<div class="panel-body">
						<form action="/pengajuan/create" method="post">
							{{csrf_field()}}
							<div class="form-group row"> <!-- {{$errors->has('nama_pengajuan') ? 'has-error' : ''}} -->
								<label class="col-sm-2 col-form-label">NAMA PENGAJU</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nama_pengajuan" placeholder="Nama Lengkap" autofocus autocomplete="off" required>
								<!-- 	@if($errors->has('nama_pengajuan'))
									<span class="help-block">{{$errors->first('nama_pengajuan')}}</span>
									@endif -->
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">UNIT</label>
								<div class="col-sm-10">
									<select class="form-control" name="unit" required>
										<option value="" selected hidden>Pilih Unit</option>
										<option value="STT NF">STT NF</option>
										<option value="NF Komputer">NF KOMPUTER</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">WAKET&SATKER</label>
								<div class="col-sm-10">
									<select class="form-control" name="waket_satker" required>
										<option value="" selected hidden>Pilih Satuan Kerja</option>
										<option value="WAKET 1 (BAAK)">WAKET 1 (BAAK)</option>
										<option value="WAKET 1 (LLC)">WAKET 1 (LLC)</option>
										<option value="WAKET 1 (LPMI)">WAKET 1 (LPMI)</option>
										<option value="WAKET 1 (LPPMI)">WAKET 1 (LPPMI)</option>
										<option value="WAKET 1 (PRODI)">WAKET 1 (PRODI)</option>
										<option value="WAKET 1 (UPT KOMPUTER)">WAKET 1 (UPT KOMPUTER)</option>
										<option value="WAKET 2 (BSP)">WAKET 2 (BSP)</option>
										<option value="WAKET 2 (KEUANGAN)">WAKET 2 (KEUANGAN)</option>
										<option value="WAKET 2 (SDM)">WAKET 2 (SDM)</option>
										<option value="WAKET 3">WAKET 3</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">PERIHAL</label>
								<div class="col-sm-10">
									<select class="form-control" name="perihal" required>
										<option value="" selected hidden>Pilih Perihal</option>
										<option value="ATK (Alat Tulis Kantor)">ATK (Alat Tulis Kantor)</option>
										<option value="Hardware">Hardware</option>
										<option value="Pencetakan">Pencetakan</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">TANGGAL</label>
								<div class="col-sm-4">
									<div class="input-group date" data-provide="datapicker">
										<input type="text" class="form-control datepicker" name="tanggal" placeholder="Pilih Tanggal" autocomplete="off" required>
										<div class="input-group-addon">
											<span class="lnr lnr-calendar-full"></span>
										</div>			
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">LIST BARANG</label>
								<div class="col-sm-10">
									<div class="table-responsive">
										<table class="table">
											<thead class="bg-info">
												<tr>
													<th>Nama Barang</th>
													<th>Link & Gambar</th>
													<th>Quantity</th>
													<th>Harga Satuan</th>
													<th>Jumlah</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="col-10">
															<input type="text" class="form-control" name="nama_barang[]" required autocomplete="off">
														</div>
													</td>
													<td>
														<div class="col-10">
															<input type="text" class="form-control" name="link_gambar[]" required autocomplete="off">
														</div>
													</td>
													<td>
														<div class="col-10" required>
															<input type="text" class="form-control" id="quantity"name="quantity[]" required autocomplete="off">
														</div>
													</td>
													<td>
														<div class="col-10">
															<input type="number" class="form-control" id="harga_satuan" name="harga_satuan[]" required autocomplete="off">
														</div>
													</td>
													<td>
														<div class="col-10">
															<input type="number" class="form-control" id="jumlah" name="jumlah[]" readonly required>
														</div>
													</td>
													<td class="col-10">

													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="4" class="text-right"><b>Total</b></td>
													<td>
														<div class="col-10">
															<input type="number" class="form-control" id="total_harga" name="total_harga" required>
														</div>
													</td>
													<td style="display: none;">
													</td>
												</tr>
											</tfoot>
										</table>
										<a href="#" class="tambahBaris">Tambah Barang</a><br><br><br>
										<p>*Lengkapi Nama Barang dengan ukuran dan warna yang lebih spesifik</p>
										<p>*Lengkapi Quantity dengan jumlah yang jelas. Misal pcs/lusin/rim/pack</p>
									</div>
								</div>
							</div>
							<br><br>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary" name="">Kirim Form</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->
	
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> -->
	
	@stop

	@section('footer')

	<script type="text/javascript">
		//toastr
		@if(session('berhasil'))
		toastr.success('{{session('berhasil')}}')
		@endif

		// date
		$(function(){
			$(".datepicker").datepicker({
				dateFormat: "dd-mm-yy",
				minDate: 0,
				maxDate: "+1M +5D"
			});
		});

		// function sum() {
		// 	var quantity = $("#quantity").val();
		// 	var harga_satuan = $("#harga_satuan").val();
		// 	jumlah = quantity * harga_satuan;
		// 	$("#jumlah").val(jumlah);
		// }

		//operasi perhitungan
		$('tbody').keyup(function(){
			var bil1 = parseInt($('#quantity').val());
			var bil2 = parseInt($('#harga_satuan').val());
			var jumlah = bil1 * bil2;

			$('#jumlah').attr('value', jumlah);
		});

		//  tambahBaris
		$('.tambahBaris').on('click', function() {
			tambahBaris();
		}); 

		function tambahBaris() {
			var tr = '<tr>'+
			'<td>'+
			'<div class="col-10">'+
			'<input type="text" class="form-control" name="nama_barang[]" autocomplete="off" required>'+
			'</div>'+
			'</td>'+
			'<td>'+
			'<div class="col-10">'+
			'<input type="text" class="form-control" name="link_gambar[]" autocomplete="off" required>'+
			'</div>'+
			'</td>'+
			'<td>'+
			'<div class="col-10">'+
			'<input type="text" class="form-control" id="quantity" name="quantity[]" autocomplete="off" required>'+
			'</div>'+ 
			'</td>'+
			'<td>'+
			'<div class="col-10">'+
			'<input type="number" class="form-control" id="harga_satuan" name="harga_satuan[]" autocomplete="off" required>'+
			'</div>'+
			'</td>'+
			'<td>'+
			'<div class="col-10">'+
			'<input type="number" class="form-control" id="jumlah" name="jumlah[]" required>'+
			'</div>'+
			'</td>'+
			'<td>'+
			'<div class="col-10"><a href="#"><span class="lnr lnr-circle-minus hapusBaris"></span></a>'+
			'</div>'+
			'</td>'+
			'</tr>';

			$('tbody').append(tr);
		};

		//hapus baris
		$(document).on('click','.hapusBaris', function() {
			$(this).closest('tr').remove();
		});
	</script>
	@endsection

