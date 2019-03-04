
function array_in(array_,val){
  for(v in array_){
   	if(array_[v] == val){
			return true;
			break;
		}
  }
	return false;
}
function bersihkan(kategori){
	if(kategori == "c_desa"){
		var s = document.querySelectorAll('.sert fieldset');
		var button = document.querySelectorAll('.sert fieldset div button');
		if(!s[0].disabled){
			for(var i=0; i<button.length; i++){
		      	button[i].disabled = false;
		      	var clear_class = button[i].classList.remove('berhasil') || button[i].classList.remove('gagal') || button[i].classList.remove('animate') || button[i].classList.remove('masih_proses');
		    }
		    s[0].disabled = true;
		}
	    
	}else{
    	var s = document.querySelectorAll('.desa fieldset');
		var button = document.querySelectorAll('.desa fieldset div button');
	    if(!s[0].disabled){
	    	for(var i=0; i<button.length; i++){
	     		button[i].disabled = false;
	      		var clear_class = button[i].classList.remove('berhasil') || button[i].classList.remove('gagal') || button[i].classList.remove('animate') || button[i].classList.remove('masih_proses');
	      
	    	}
	    		s[0].disabled = true;
	    }	    
  }
}

function get_desa(str){
    var string = str.split(','); // mengembalikan nilai array
		var hal = document.querySelectorAll('.desa');
		var check = document.querySelectorAll('.desa fieldset');
		var button = document.querySelectorAll('.desa fieldset div button') || "tidak ada";
		
		// hapus disabled pada fieldset\\
		if(hal[0].children[1].disabled){
			hal[0].children[1].disabled = false;
		}
	// membuat variabel yang menampung object
		if(!check[0].disabled){
		/* digunakan untuk mendisabled semua tombol yang ada di dalam fieldset */
		  for(var i = 0; i<button.length; i++){
		    // console.log(button[i]); // identifikasi button
		    var butval = button[i];
				var ss = button[i].classList.remove('gagal') || button[i].classList.remove('berhasil') || button[i].classList.remove('animate') || button[i].classList.remove('masih_proses');
		    // var node_luar = button[i].parentNode.parentNode; // <div>
		    // console.log(node_luar.nextElementSibling);
				if(!array_in(string,butval.attributes['alt'].value)){
					button[i].disabled = true;
					button[i].classList.add('masih_proses');
				}else{
					button[i].classList.add('berhasil');
				}
		    
		  }
			
			var node_luar = button[string.length - 1].parentNode.parentNode; //div
			if(node_luar.nextElementSibling != null){
				node_luar.nextElementSibling.children[0].children[0].disabled = false;
                node_luar.nextElementSibling.children[0].children[0].classList.add('gagal');
                node_luar.nextElementSibling.children[0].children[0].classList.remove('masih_proses');
			}
			
		}

}


