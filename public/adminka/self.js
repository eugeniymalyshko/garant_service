//================= DELETE REPORT CONFIRMATION ========================
$('.delete').click(function () {
   var res = confirm('Ви впевнені, що хочете здійснити видалення?');
   if (!res) return false;
});
//=====================================================================
//==================== GALLERY PHOTO UPLOAD ===========================
$('.del-item').on('click', function () {
   var res = confirm('Ви впевнені, що хочете здійснити видалення?');
   if (!res) return false;
   var $this = $(this),
       id = $this.data('id'),
       src = $this.data('src');
   $.ajax({
      url: adminpath + '/gallery/delete',
      data: {id: id, src: src},
      type: 'POST',
      // beforeSend: function () {
      //
      // },
      success: function(res) {
         if (res == 1) {
            $this.fadeOut('.delete');
         }
      },
      error: function(){
         alert('Error!');
      }
   })
});
//=====================================================================
//==================== GALLERY PHOTO UPLOAD ===========================
var buttonMain = $("#main"), file;

new AjaxUpload(buttonMain, {
   action: adminpath + buttonMain.data('url') + "?upload=1",
   data: {name: buttonMain.data('name')},
   name: buttonMain.data('name'),
   onSubmit: function(file, ext){
      if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
         alert('Помилка! Дозволені лише зображення');
         return false;
      }
      buttonMain.closest('.file-upload').find('.overlay').css({'display':'flex'});
   },
   onComplete: function(file, response){
      setTimeout(function(){
         buttonMain.closest('.file-upload').find('.overlay').css({'display':'none'});
         response = JSON.parse(response);
         $('.' + buttonMain.data('name')).append('<img src="/images/gallery/1/' + response.file + '" style="max-height: 150px;">');
      }, 1000);
   }
});
//=====================================================================
