<?php  

	namespace App\Models;

	use Illuminate\database\Eloquent\Factories\hasFactory;
	use Illuminate\database\Eloquent\Model;
	use Str;

	class Kandidat extends Model{
		protected $table = 'kandidat';

		function handleUploadFoto(){
			if(request()->hasFile('foto')){
				$this->handleDeleteFoto();

				$foto = request()->file('foto');
				$destination = "images/pas_foto";
				$random = Str::random(10);
				$filename = time()."-".$random.".".$foto->extension();
				$url = $foto->storeAs($destination, $filename);
				$this->foto = "app/".$url;
				$this->save;
			}
		}

		function handleDeleteFoto(){
			$foto = $this->foto;
			if($foto){
				$path = public_path($foto);

				if(file_exists($path)){
					unlink($path);
				}
			}
			return true;
		}
    }
?>