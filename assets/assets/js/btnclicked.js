
function btnAction(button){
  var btn = button // Tombol yang diclick sekarang;
      if(btn.parentNode.parentNode){
        var apt = btn.parentNode.parentNode;
        if(apt.nextElementSibling){
          var btn_next = apt.nextElementSibling.children[0].children[0];       
          btn_next.disabled = false;
            btn_next.classList.add('gagal');
            btn_next.classList.remove('masih_proses');
        
        }
          btn.classList.remove('gagal');
          btn.classList.remove('masih_proses');
          btn.classList.add('animate');
      }
}

function btn_clicked(){
var btn = document.querySelectorAll('.desa fieldset div button'); // untuk kategori desa
for(var i = 0; i<btn.length; i++){
  btn[i].onclick = function(e){
    var tombol_desa = this;
    var btnDval = this.attributes.getNamedItem('alt').nodeValue;
    var noshm = $('#keterangan .NOSHM').html();
    if((this.classList.contains('berhasil') != true) && (this.classList.contains('animate') != true)){
      this.classList.add('proses');
      $.ajax({
        url:"http://localhost/sertipikat/index.php/permalink/test",
        type:"get",
        cache:false,
        timeout:10000,
        data:{ket:','+btnDval,
          Noshm:noshm
        },
        success:function(query){
          btnAction(tombol_desa);
          console.log(query);
          tombol_desa.classList.remove('proses');
        }
        }).fail(function(j ,text){
          console.log('request will '+text);
          tombol_desa.classList.remove('proses');
        });
    }
  }
}

var btn_sert = document.querySelectorAll('.sert fieldset div button'); // untuk kategori sertipikat
for(var u = 0; u<btn_sert.length; u++){
  btn_sert[u].onclick = function(e){
    var tombol_sert = this;
    var btnSval = this.attributes.getNamedItem('alt').nodeValue;
    var noshm = $('#keterangan .NOSHM').html();   
    if((this.classList.contains('berhasil') != true) && (this.classList.contains('animate') != true)){
      this.classList.add('proses');
      $.ajax({
        url:"http://localhost/sertipikat/index.php/permalink/test",
        type:"get",
        cache:false,
        timeout:10000,
        data:{ket:','+btnSval,
          Noshm:noshm
        },
        success:function(query){
          btnAction(tombol_sert);
          console.log(query);
          tombol_sert.classList.remove('proses');
        }
        }).fail(function(j ,text){
          console.log('request will '+text);
          tombol_sert.classList.remove('proses');
        });
    }
  }
}

}
btn_clicked();
