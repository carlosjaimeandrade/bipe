function reqCod(event) {
    const codigo = event.target.parentNode.children[0].value
    const id_linha = event.target.parentNode.children[1].value
    const inport = document.querySelector('.inport')
    const local_erro = document.querySelector(".container")


    $.ajax({
        url: "/bipe/api/buscar",
        method: 'POST',
        data: {
            codigo: codigo,
            id_linha: id_linha
        },
        dataType: 'json',
    }).then(function (results) {

        if (results == false) {
            local_erro.insertAdjacentHTML("beforeend",
                `<div class="alert alert-danger" role="alert">
                Nenhum dado encontrado para esse codigo
            </div>`)
            delete_msg = document.querySelectorAll('.alert')
            setTimeout(() => {
                delete_msg.forEach(e=>{
                    e.remove()
                })
            }, 2000)
        } else {
            results.forEach(result => {
                const id_linha = document.querySelector('.id_linha').value
                tdCodigo = `<td>${result.codigo}</td>`
                tdNome = `<td>${result.nome}</td>`
                tdModelo = `<td>${result.modelo}</td>`
                tdLinha = `<td>${id_linha}</td>`
                tr = document.createElement('tr')
                tr.insertAdjacentHTML('beforeend', `${tdCodigo}${tdNome}${tdModelo}${tdLinha}`)
            })
            inport.insertAdjacentElement('afterbegin', tr)
        }
    })
}