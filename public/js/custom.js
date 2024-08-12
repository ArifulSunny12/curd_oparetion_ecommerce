setTimeout(function() {
    $('#messageDiv').hide(5000);
}, 3000); // <-- time in milliseconds


$(function(){
    $(".open-edit-modal").click(function(){

        var todoId = $(this).data('edit');
        //console.log(todoId);
       $('#updateCategoryid').val(todoId.id);
       $('#updateCategoryName').val(todoId.name);
       $('#updateDescription').val(todoId.details);
       
      $("#exampleModal").modal("show");
    });
  });