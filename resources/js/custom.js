/* function confirmarExclusao(event, solicitanteId){
    event.preventDefault();
     Swal.fire({
         title:'Excluir esse registro ?',
         text:'Tenha certeza, você não pode reverter essa operação',
         icon:'warning',
         showCancelButton: true,
         cancelButtonText:'Cancelar a exclusão',
         confirmButtonColor:'#d33',
         confirmButtonText:'Sim, excluir',
     }).then((result=>{
         if(result.isConfirmed){
             document.getElementById(`formExcluir${solicitanteId}`).submit();    
         }
     }))
 } */
     function confirmarExclusao(event, solicitanteId)
     {
     toastr.success("<br /><br /><button type='button' id='confirmationButtonYes' class='btn clear'>Yes</button>",'delete item?',
        {
            closeButton: false,
            allowHtml: true,
            onShown: function (toast) {
                $("#confirmationButtonYes").click(function(){
                  console.log('clicked yes');
                });
              }
        });
    }