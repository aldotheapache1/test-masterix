
var i = 0;
var count = 0;

function addField() {
++i;
$("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][nome]" placeholder="Email" class="form-control" required/></td><td><input type="text" name="moreFields['+i+'][valor]" placeholder="teste@gmail.com" class="form-control" required/></td><td><button type="button" class="btn btn-danger remove-tr">Remover Linha</button></td></tr>');
}
$(document).on('click', '.remove-tr', function(){  
$(this).parents('tr').remove();
document.getElementById('add-btn-edit').style.visibility = 'hidden';
});  

function addFieldEdit(iae) {
  iae = parseInt(iae)+parseInt(count);

  $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+iae+'][nome]" placeholder="Email" class="form-control" required/></td><td><input type="text" name="moreFields['+iae+'][valor]" placeholder="teste@gmail.com" class="form-control" required/></td><td><button type="button" class="btn btn-danger remove-tr">Remover Linha</button></td></tr>');
  count++;
  }
