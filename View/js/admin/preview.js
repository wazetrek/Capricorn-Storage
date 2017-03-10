function mostrarImagen(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#vista').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
 }
 }

 $('#imagen').change(function(){
   mostrarImagen(this);
 });
