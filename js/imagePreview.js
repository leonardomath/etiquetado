function imagePreview(input){
  if(input.files && input.files[0]) {
    var file = new FileReader();
    file.onload = function (e) {
      $('.imgPreview').attr("src", e.target.result);
    };
    file.readAsDataURL(input.files[0]);
  }
}