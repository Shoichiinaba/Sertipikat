
function get_sertipikat(str){
    var string = str.split(','); // mengembalikan nilai array
		var hal = document.querySelectorAll('.sert');
		var check = document.querySelectorAll('.sert fieldset');
		var button = document.querySelectorAll('.sert fieldset div button') || "tidak ada";
		
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
			
			// langkah terakhir
			
			var node_luar = button[string.length - 1].parentNode.parentNode; //div
			if(node_luar.nextElementSibling != null){
				node_luar.nextElementSibling.children[0].children[0].disabled = false;
                node_luar.nextElementSibling.children[0].children[0].classList.add('gagal');
                node_luar.nextElementSibling.children[0].children[0].classList.remove('masih_proses');
			}
			
		}

}
// get_sertipikat('pn_dokumen,ploting,pn_sertipikat,zona,IPH,pn_pajak');
function tmplKet(Objarray){
	var tnama = $('#keterangan .NAMA'),
	tnomer = $('#keterangan .NOSHM'),
	tkategori = $('#keterangan .KATEGORI');
	if(Objarray != 'none'){
		var nama = Objarray[0]['nm_penjual'],
		nomer = Objarray[0]['no_sertipikat'],
		kategori = Objarray[0]['kategori'];
		tnama.html(nama);
		tnomer.html(nomer);
		tkategori.html(kategori);
	}else{
		tnama.html('(none)');
		tnomer.html('(none)');
		tkategori.html('(none)');
	}
}
var textcari = document.querySelectorAll('.pencarian input[type=text]')[0];
var btncari = document.querySelectorAll('.pencarian #get_cari')[0];
btncari.onclick = function(event){
	$('#loader').show();
	var valu = textcari.value;
	console.log('event telah diclick');
	  $.ajax({
	    url:"http://localhost/sertipikat/index.php/permalink/ambil_data",
	    type:"get",
	    cache:false,
	    timeout:10000,
	    data:{cari:valu},
	    success:function(query){
	      var q = (query === 'NO_DATA_QUERY')?'none':JSON.parse(query);
	      var alamat = q[0]['almt_pembeli'],
	      kategori = q[0]['kategori'],
	      nm_pembeli = q[0]['nm_pembeli'],
	      nm_penjual = q[0]['nm_penjual'],
	      no_sertipikat = q[0]['no_sertipikat'],
	      proses = q[0]['proses'];

	      $('#loader').hide();

	      // tahap implementasi
	      	if(q != 'none'){
	      		if(kategori === 'c_desa'){
	      			tmplKet(q);
	      			bersihkan(kategori);
			      	get_desa(proses);
			    }else{
			    	tmplKet(q);
			    	bersihkan(kategori);
			      	get_sertipikat(proses);
	      		}
	      	}else{
	      		tmplKet(q);
	      		bersihkan('c_desa');
	      		bersihkan('sertipikat');
	      	}

	    }
	  }).fail(function(j ,text){
	    console.log('request will '+text);
	    alert('server sedang dalam masalah');
	    $('#loader').hide();
	  });
};