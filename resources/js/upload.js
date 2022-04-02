const { Dropzone } = require("dropzone");

if (document.querySelector('#dropzoneItems')) {
    let items = new Set()
    Dropzone.autoDiscover = false;
    document.addEventListener('DOMContentLoaded', () => {
        // Dropzone
        const dropzoneItem = new Dropzone('#dropzoneItems', {
            url: "/admin/uploadImagen",
            dictDefaultMessage: 'Arrastra aqui los archivos para tu solicitud, imagenes, PDF`s, etc.',
            acceptedFiles: '.png,.jpg,.jpeg',
            addRemoveLinks: true,
            dictRemoveFile: 'Borrar Archivo',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
            },
            init: function () {
                const itemsOld = document.querySelector('#images').value.split(',')
                if (document.querySelector('#images').value.trim()) {
                    console.log(itemsOld);
                    let imagenPublicada = []
                    itemsOld.forEach((itemOld, index) => {
                        items.add(itemOld)
                        imagenPublicada[index] = {}
                        imagenPublicada[index].size = 1024;
                        imagenPublicada[index].name = itemOld

                        this.options.addedfile.call(this, imagenPublicada[index])
                        this.options.thumbnail.call(this, imagenPublicada[index],
                            `/storage/projects/${imagenPublicada[index].name}`)
                        imagenPublicada[index].previewElement.classList.add('dz-success')
                        imagenPublicada[index].nombreServidor = itemOld
                        //imagenPublicada[index].previewElement.classList.add('complete')
                        imagenPublicada[index].previewElement.children[2].classList.add(
                            'd-none')
                        imagenPublicada[index].previewElement.children[0].children[0]
                            .classList.add('w-100')
                    });
                }
            },
            success: function (file, response) {
                console.log(file);
                console.log(response);
                document.querySelector('#error').textContent = ''
                items.add(response.correcto)
                console.log(items);
                document.querySelector("#images").value = [...items];
                // Add al objeto de archivo, el nombre de la imagen en el servidor
                file.nombreServidor = response.correcto
                // file.previewElement.parentNode.removeChild(file.previewElement)
            },
            error: function (file, response) {
                // console.log(response);
                // console.log(file);
                document.querySelector('#error').textContent = 'Formato no valido'
            },
            removedfile: function (file, response) {
                file.previewElement.parentNode.removeChild(file.previewElement)
                // console.log(file);
                console.log('El archivo borrado fue');
                params = {
                    imagen: file.nombreServidor
                }
                // console.log(params);
                axios.post('/admin/deleteImagen', params)
                    .then(response => {
                        console.log(response.data);
                        if (items.has(response.data.imagen)) {
                            items.delete(response.data.imagen)
                            document.querySelector("#images").value = [...items];
                        }
                        console.log(items);
                    })
            }
        });
    })
}
