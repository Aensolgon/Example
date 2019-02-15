
window.onload = function () {
    let publishStatus = document.querySelectorAll(".status");
    let fileInput = document.querySelectorAll(".file-image");   //контрол загрузки файла с диска
    let updateImageFile = document.getElementById('file-image');

    if(publishStatus){
        publishStatus.forEach((item)=>{
            item.addEventListener("change",sendUpdateToServer)
        })
    }

    if(fileInput){
        fileInput.forEach((item)=>{
            item.addEventListener("change",sendToImgContainer)
        })
    }

    function sendToImgContainer(e){
        let findImg = e.target.dataset.img;

        let imgContainers = document.querySelectorAll(".blog-image"); //тэг img

        imgContainers.forEach((item)=>{
            if(item.dataset.img == findImg){
                uploadToImage(e,item);

            }
        })

    }


    function sendUpdateToServer(e){
        let id = e.target.dataset.id;
        let url = "/update-publish-status/"+id;
        console.log(sendGet("",url));
    }


    function  sendGet(data,url) {
        var question = ajax({
            method: 'get',
            url: url,
            data: data
        })

        question.then(function (response) {
            return response
        })
    }


    function uploadToImage(evt,img){
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                img.src = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }
        else {

        }
    }

    if(updateImageFile){
        updateImageFile.onchange = function (evt) {
            let img = document.getElementById('blog-image');

            uploadToImage(evt,img);
        }

    }



}




