$('button[type="upload"]').on('click', function(e){
    e.preventDefault();
    var $file = $(this).parent().find('input[type="file"]');
    var $bar = $(this).parent().find('.progress-bar');
    var formData = new FormData();
    formData.append(0, $file[0].files[0]);

    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function(e){
                if(e.lengthComputable){

                    var percenct = Math.round(e.loaded/e.total*100);

                    $bar.attr('aria-now', percenct);
                    $bar.css('width', percenct+"%");
                    $bar.text(percenct+"%");
                }
            });
            return xhr;
        },
        url: '../inc/upload_file.php',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            if(data.toLowerCase() == 'success'){
                $bar.addClass('bg-success');
                $bar.text(data);
            }else{
                $bar.attr('aria-now', 100);
                $bar.css('width', "100%");
                $bar.addClass('bg-danger');
                $bar.text(data);
            }

        }
    });
});