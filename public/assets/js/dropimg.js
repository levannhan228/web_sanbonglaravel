window.onload=function(){
     // vars
        let result = document.querySelector('.result'),
        upload = document.querySelector('#file-input'),
        cropper = '';
    
        // thay đổi hiển thị hình ảnh với các tùy chọn cắt
        upload.addEventListener('change', (e) => {
        if (e.target.files.length) {
                // bắt đầu đọc tập tin
            const reader = new FileReader();
            reader.onload = (e)=> {
            if(e.target.result){
                        // tạo hình ảnh mới
                        let img = document.createElement('img');
                        img.id = 'image';
                        img.src = e.target.result
                        // xóa hình cũ
                        result.innerHTML = '';
                        // ghi đè hình mới
                        result.appendChild(img);
            }
            };
            reader.readAsDataURL(e.target.files[0]);
        }
        });
    }