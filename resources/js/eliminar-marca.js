import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;

function userHandler() {
    return {
        selectedId: null,
        selectedNombreMarca: null,
        selectedIdFila: null,
        hiddenRows: [],


        confirmSend(el) {
            this.selectedId = el.dataset.id;
            this.selectedNombreMarca = el.dataset.nombremarca;
            this.selectedIdFila = "fila-" + el.dataset.id;

            /*CODIGO DEL SWEET ALERT*/
            Swal.fire({
                title: "Borrar marca " + this.selectedNombreMarca + "?",
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
                    console.log('Respuesta backend:', data);
                    Swal.fire('Éxito', 'La marca fue eliminada correctamente', 'success')
                        //OCULTAMOS LA FILA DESPUES DEL SEGUNDO ALERT
                        .then(() => {
                            //CODIGO PARA OCULTAR UNA FILA TR
                            if (!this.hiddenRows.includes(parseInt(this.selectedId))) {
                                this.hiddenRows.push(parseInt(this.selectedId));
                                console.log('Fila ocultada:', this.selectedId);
                                console.log('Arreglo:', this.hiddenRows);
                            }
                            //FIN DEL CODIGO PARA OCULTAR UNA FILA TR
                        });
                    //FIN DEL COD OCULTAMOS LA FILA DESPUES DEL SEGUNDO ALERT
                })
                .catch(error => Swal.fire('Error', 'No se pudo realizar la operacion', 'error'));
        },
        /*FIN DEL CODIGO DONDE SE ENVIA AL BACKEND LA PETICION*/

        /*CODIGO DEL BOTON RESTAURAR*/
        restaurarMarca(el) {

            this.selectedId = el.dataset.id;
            this.selectedNombreMarca = el.dataset.nombremarca;
            this.selectedIdFila = "fila-" + el.dataset.id;

            Swal.fire({
                title: "Restaurar elemento",
                text: "Desea restaurar " + this.selectedNombreMarca + "?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Restaurar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    //Tratarlo en el backend
                    this.sendRestore();
                }
            });


        },
        /*FIN DEL CODIGO DEL BOTON RESTAURAR*/
        sendRestore() {

            fetch('/marcas/restaurar-marca', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id: this.selectedId })
            })
                .then(response => response.json())
                .then(() => {
                    //CODIGO PARA OCULTAR UNA FILA TR
                    if (!this.hiddenRows.includes(parseInt(this.selectedId))) {
                        this.hiddenRows.push(parseInt(this.selectedId));
                        console.log('Fila ocultada:', this.selectedId);
                        console.log('Arreglo:', this.hiddenRows);
                    }
                    //FIN DEL CODIGO PARA OCULTAR UNA FILA TR
                });

        }
        /*fin del send restore*/

    }

}

// Exponer la función para Alpine
window.userHandler = userHandler;