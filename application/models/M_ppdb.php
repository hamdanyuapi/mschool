<?php 
class M_ppdb extends CI_Model{
 
	function get_all_ppdb(){
		$hsl=$this->db->query("SELECT * FROM tbl_pendaftaran");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_pendaftaran");
		return $hsl;
	}

	// function simpan_ppdb_with_img($nama_lengkap,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$alamat,$desa,$kecamatan,$kabupaten,$provinsi,$nama_ayah,$nama_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$no_hp){
	// 	$hsl=$this->db->query("INSERT INTO tbl_pendaftaran (nama_lengkap,jenis_kelamin,tempat_lahir,tgl_lahir,alamat,desa,kecamatan,kabupaten,provinsi,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,no_hp) VALUES ('$nama_lengkap','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$alamat','$desa','$kecamatan','$kabupaten','$provinsi','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$no_hp')");
	// 	return $hsl;
	// }
	function simpan_ppdb($nama_lengkap,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$alamat,$desa,$kecamatan,$kabupaten,$provinsi,$nama_ayah,$nama_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$no_hp){
		$hsl=$this->db->query("INSERT INTO tbl_pendaftaran (nama_lengkap,jenis_kelamin,tempat_lahir,tgl_lahir,alamat,desa,kecamatan,kabupaten,provinsi,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,no_hp) VALUES ('$nama_lengkap','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$alamat','$desa','$kecamatan','$kabupaten','$provinsi','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$no_hp')");
		return $hsl;
	}

	// function update_ppdb($nama_lengkap,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$alamat,$desa,$kecamatan,$kabupaten,$provinsi,$nama_ayah,$nama_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$no_hp){
	// 	$hsl=$this->db->query("UPDATE tbl_pendaftaran SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
	// 	return $hsl;
	// }
	// function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
	// 	$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
	// 	return $hsl;
	// }
	function hapus_ppdb($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pendaftaran WHERE kode='$kode'");
		return $hsl;
	}

	// function siswa(){
	// 	$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
	// 	return $hsl;
	// }
	// function siswa_perpage($offset,$limit){
	// 	$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
	// 	return $hsl;
	// }

}