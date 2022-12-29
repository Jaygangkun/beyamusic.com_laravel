var dropzone_add_music_img = null;
var dropzone_add_album_img = null;
var music_img_file = null;
var album_img_file = null;


var previewNode = document.querySelector("#upload_img_dropzone_template")
previewNode.id = ""
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

Dropzone.autoDiscover = false;
dropzone_add_music_img = new Dropzone('#dropzone_add_music_img', { 
    url: '/',
    autoQueue: false,
    previewTemplate: previewTemplate,
    maxFiles: 1,
    acceptedFiles: '.png, .jpg, .jpeg'
});

dropzone_add_music_img.on("addedfile", function(file) {
    music_img_file = file;
})

$(document).on('click', '#btn_add_music', function() {
    var formdata = new FormData($('#form_add_music')[0]);
    formdata.append('music_img_file', music_img_file);

    $.ajax({
        url: '/ajax/add-music',
        type: 'post',
        enctype: 'multipart/form-data',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        dateType: 'json',
        success: function(resp){
            if(resp.success) {
                alert('Added Successfully');
            }
            else {
                alert(resp.message);
            }
        }
    })
})


dropzone_add_album_img = new Dropzone('#dropzone_add_album_img', { 
    url: '/',
    autoQueue: false,
    previewTemplate: previewTemplate,
    maxFiles: 1,
    acceptedFiles: '.png, .jpg, .jpeg'
});

dropzone_add_album_img.on("addedfile", function(file) {
    album_img_file = file;
})


$(document).on('click', '#btn_add_album', function() {
    var formdata = new FormData($('#form_add_album')[0]);
    formdata.append('album_img_file', album_img_file);

    $.ajax({
        url: '/ajax/add-album',
        type: 'post',
        enctype: 'multipart/form-data',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        dateType: 'json',
        success: function(resp){
            if(resp.success) {
                alert('Added Successfully');
            }
            else {
                alert(resp.message);
            }
        }
    })
})