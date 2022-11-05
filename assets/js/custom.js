$(document).ready(function(e){
    $('#sliderFile').change(function(){
        const file = this.files[0];
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
              console.log(event.target.result);
              $('#slider_preview').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    //Slider Upload 
    $("#sliderUpload").submit(function(e){
        formData = new FormData(this);
        $.ajax({
            url: "Dashboard",
            type: "post",
            data: formData,
            success: function(response) {
                
            }
        });
    });
});