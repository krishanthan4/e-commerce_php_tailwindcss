function uploadProductImages() {

    var image = document.getElementById("imageUploader");

    image.onchange = function () {
        var file_count = this.files.length;

        if (file_count <= 3) {
            for (var x = 0; x < file_count; x++) {
                var file = this.files[x];
                var url = window.URL.createObjectURL(file);
                document.getElementById("image" + x).src = url;
            }
        } else {
            document.getElementById("msgToast").classList.remove("hidden");
            document.getElementById("msg").innerHTML = file_count + " files. You are only allowed to upload 3 or fewer files." ;
            setTimeout(() => {
                document.getElementById("msgToast").classList.add("hidden");
            }, 2500);
        }
    };


}