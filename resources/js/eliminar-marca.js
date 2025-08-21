import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;

function userHandler() {
    return {
        selectedId: null,
        selectedNombreMarca: null,


        confirmSend(el) {
            this.selectedId = el.dataset.id;
            this.selectedNombreMarca = el.dataset.nombremarca;

            /*CODIGO DEL SWEET ALERT*/
            Swal.fire({
                title: "Borrar marca "+this.selectedNombreMarca+"?",
                text: "Esta acción no se puede revertir!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonColor: "#3085d6",
                confirmButtonColor: "#d33",
                confirmButtonText: "Sí, borrar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    //Tratarlo en el backend
                    this.sendToBackend();
                }
            });
            /*FIN DEL CODIGO DEL SWEET ALERT*/
        },


        /*CODIGO DONDE SE ENVIA AL BACKEND LA PETICION*/
        sendToBackend() {
            fetch('/marcas/eliminar-marca-ok', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id: this.selectedId })
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire('Éxito', 'La marca fue eliminada correctamente', 'success');
                console.log('Respuesta backend:', data);
            })
            .catch(error => Swal.fire('Error', 'No se pudo realizar la operacion', 'error'));
        }
        /*FINN DEL CODIGO DONDE SE ENVIA AL BACKEND LA PETICION*/
    }

}

// Exponer la función para Alpine
window.userHandler = userHandler;