function onLoadFile(event) {
    const elementInsert = document.querySelector("[cf-name-file]")

    if (event.target.files.length > 0) {
        elementInsert.innerText = event.target.files.length + " arquivos carregados"
    } else {
        elementInsert.innerText = ""
    }

}

function deleteArq(event){
    const btn_del = event.target.parentNode.children[2]
    const container_upload = event.target.parentNode.parentNode
    const cancel = event.target.parentNode.parentNode.children[0]
    if(event.target.checked){
        btn_del.innerHTML = `<i class="fa fa-minus del-upload" aria-hidden="true"></i>`
        container_upload.insertAdjacentHTML('afterbegin', `<div class="delete-upload-action"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Será excluído</div>` )
    }else{
        if(cancel){
            cancel.remove()
        }
        btn_del.innerHTML = `<i class="fa fa-trash-o del-upload" aria-hidden="true"></i>`
    }
}