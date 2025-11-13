// assets/js/main.js
function confirmDelete(id){
    Swal.fire({
        title: 'Confirma exclusão?',
        text: 'O produto será removido permanentemente.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, excluir',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // redireciona para a rota delete
            window.location.href = 'index.php?a=delete&id=' + id;
        }
    });
}
