<div class="card">
    <div class="text">
        Masukkan Data
    </div>
	<style>
		.form{
			margin: 20px;
		}
		.button{
			color: #fff;
    		background: #11101D;
    		font-size: 1.2rem;
    		font-weight: 500;
    		letter-spacing: 1px;
    		margin-top: 1.7rem;
    		cursor: pointer;
    		transition: 0.4s;
			height: 60px;
   			 width: 100%;
			padding: 0 15px;
			font-size: 17px;
			margin-bottom: 1.3rem;
			border: 1px solid #ddd;
			border-radius: 6px;
			outline: none;
		}
		.button:hover{
			background: #009579;
		}
		.text-box{
			height: 60px;
			width: 200%;
			padding: 0 15px;
			font-size: 17px;
			margin-bottom: 1.3rem;
			border: 1px solid #ddd;
			border-radius: 6px;
			outline: none;
		}
	</style>
	<div class="form">
		<form action="./functions/saveNotes.php" method="post">
			<table>
				<tbody>
					<tr>
						<td><label class="text">Tanggal</label></td>
						<td><input class="text-box" name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal"></td>
					</tr>
					<tr>
						<td>
							<label class="text">Jam</label>
						</td>
						<td>
							<input  class="text-box" name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
						</td>
					</tr>
					<tr>
						<td>
							<label class="text">Lokasi</label>
						</td>
						<td>
							<input class="text-box" name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
						</td>
					</tr>
					<tr>
						<td>
							<label class="text">Kegiatan PKL</label>
						</td>
						<td>
							<input class="text-box" name="pkl" type="text" required class="form-control" placeholder="Masukan Kegiatan PKL">
						</td>
					</tr>
					<tr>
						<td><button type="submit" class="button">Simpan</button></td>
						<td><button type="reset" class="button">Kosongkan</button></td>
					</tr>
				</tbody>
			</table>
			
			
		</form>
	</div>
</div>