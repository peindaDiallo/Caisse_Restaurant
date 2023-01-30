/**
 *
 * @param {string} idName  le meme name que celui mi au niveau du components (x-custom-select)
 * @param {*} data
 * @param  columnList
 * @param {*} idModal  le meme method que celui mi au niveau du components (x-custom-select)
 */
function selectPersoModal(idName, data, columnList, idModal) {
    let res = JSON.parse(data);
    let selectp = $(`#${idName}`);
    selectp.html('');
    console.log(res);
    console.log(columnList);
    selectp.append(`<option value='${res[columnList[0]]}' selected='selected'>${res[columnList[0]]} | ${res[columnList[1]]}  ${res[columnList[2]] !== undefined ?' | '+res[columnList[2]]: ''}</option>`);
    $(`#${idName}_val`).val(res[columnList[0]]).trigger('change');

    document.getElementById(idModal).classList.remove("active");
}

function showModel(id) {
    const frmDelete = document.getElementById("delete-frm");
    frmDelete.action = id;
    const confirmationModal = document.getElementById("deleteConfirmationModel");
    confirmationModal.style.display = 'block';
    confirmationModal.classList.remove('fade');
    confirmationModal.classList.add('show');
}
function showEditModal(id, idModal) {
    const frmDelete = document.getElementById("edit-confirm-frm");
    frmDelete.href = id;
    const confirmationModal = document.getElementById('editConfirmationModel');
    confirmationModal.style.display = 'block';
    confirmationModal.classList.remove('fade');
    confirmationModal.classList.add('show');
}

function dismissModel() {
    const confirmationModal = document.getElementById("deleteConfirmationModel");
    confirmationModal.style.display = 'none';
    confirmationModal.classList.remove('show');
    confirmationModal.classList.add('fade');
}
function dismissEditModal() {
    const confirmationModal = document.getElementById("editConfirmationModel");
    confirmationModal.style.display = 'none';
    confirmationModal.classList.remove('show');
    confirmationModal.classList.add('fade');
}

/**
 *
 * @param idcompany
 * @param modalId
 */
function openModal(idcompany, modalId){
    $(`#${modalId}`).modal('show');
    $(`#${modalId}-content`).load(idcompany)
}


/**
 *
 * @param {string} key
 * @param {string} formId
 * @param {string} action
 * @param {number} limit
 */
function save(key, formId,action, limit = 5){
    if(action === 'add'){
        add(key,formId,limit);
    }else{
        update(key,formId,limit);
    }
}

/**
 *
 * @param {string} key
 * @param {string} formId
 * @param {number} limit
 */
function update(key,formId, limit){
    const values = $(formId).serializeArray().reduce(function(obj, item) {
        obj[item.name] = (item.name === 'id') ?parseInt(item.value):item.value;
        return obj;
    }, {});

    const  data = JSON.parse(localStorage.getItem(key));
    data.forEach((val, index)=>{
        if (val.id === values.id){
            $.each(val, (k,v)=>{
                val[k] = values[k];
            });
        }
    });
    localStorage.setItem(key, JSON.stringify(data));
    addRows(key,`#table-content-${key}`, limit)
    const modalId = `#add-${key}`;
    $(modalId).modal('hide');
}




function showEditmodal(id, item) {
    const btnEdit = '<input type="hidden" name="id" id="id"/><button type="button" onclick="save(\'destins\', \'#destins-form\',\'update\')" class="btn btn-primary">Editer</button>';
    const key = item.id;
    const modalId = `#add-${key}`;
    const modalAction = `#${key}-action`;
    $(modalId).modal('show');
    $(modalAction).empty();
    $(modalAction).append(btnEdit);
    const data = JSON.parse(localStorage.getItem(key));
    data.forEach((val)=>{
        if (val.position === id){
            $.each(val, (k,value) =>{
                $(`#${k}`).val(value);
            });
        }
    });
}

/**
 *
 * @param id
 * @param item
 * @param  limit
 */
function deleteItem(id, item, limit, idPage=null){
    const key = item.id;
    let donnes = [];
    const tableBodyId = `#table-content-${key}`;
    const data = JSON.parse(localStorage.getItem(key));
    data.forEach((val, index)=>{
        if (val.position !== id){
            donnes.push(val)
        }else{
            if(val.pnimpdar !==''){
                const totalDare = parseInt(localStorage.getItem('total_dare'),10);
                localStorage.setItem('total_dare', totalDare - parseInt(val.pnimpdar));
            }
            if(val.pnimpave !==''){
                const totalAvere = parseInt(localStorage.getItem('total_avere'),10);
                localStorage.setItem('total_avere', totalAvere - parseInt(val.pnimpave));
            }
        }
    });
    localStorage.setItem(key, JSON.stringify(donnes));
    if(idPage !== null){
        addRows(key,tableBodyId, parseInt(limit))
    }else{
        addRows2(key,tableBodyId, parseInt(limit))
    }
}

function deleteItem2(id, item, limit, idPage=null){
    const key = item.id;
    let donnes = [];
    const tableBodyId = `#table-content-destins`;
    const data = JSON.parse(localStorage.getItem('dprinots'));
    data.forEach((val, index)=>{
        if (val.position !== id){
            donnes.push(val)
        }else{
            if(val.pnimpdar !==''){
                const totalDare = parseInt(localStorage.getItem('total_dare'),10);
                localStorage.setItem('total_dare', totalDare - parseInt(val.pnimpdar));
            }
            if(val.pnimpave !==''){
                const totalAvere = parseInt(localStorage.getItem('total_avere'),10);
                localStorage.setItem('total_avere', totalAvere - parseInt(val.pnimpave));
            }
        }
    });
    localStorage.setItem(key, JSON.stringify(donnes));
    if(idPage !== null){
        addRows(key,tableBodyId, parseInt(limit))
    }else{
        addRows2(key,tableBodyId, parseInt(limit))
    }
}

/**
 *
 * @param {string} idTable
 * @param {string} search
 * @param {string} lengthMenu
 * @param {string} emptyTable
 * @param {string} first
 * @param {string} previous
 * @param {string} next
 * @param {string} last
 */
function showJdatatable(idTable, search, lengthMenu,emptyTable,first, previous, next, last){
    const tables = $(idTable).DataTable({
        "aLengthMenu": [[5,10,25,50,100,-1], [5,10,25,50,100,"All"]],
        info: false,
        order: [[1, 'desc']],
        autoWidth: false,
        language: {
            search:         search,
            lengthMenu:    lengthMenu,
            emptyTable:     emptyTable,
            paginate: {
                first:      first,
                previous:   previous,
                next:       next,
                last:       last
            },
        },
        buttons: [
            { extend: 'excel',className: 'exportExcel', exportOptions: { modifier: { page: 'all'} } },
            {  extend: 'print', className: 'printFile' },
            { extend: 'pdf',className: 'pdfFile', exportOptions: { modifier: { page: 'all' } } },
        ]
    });
    // tables.buttons().container().appendTo(`${idTable}_wrapper .col-md-6:eq(0)`);


/**
 *
 * @param {Object} el
 */

}

/**
 *
 * @param {Object} limitField
 * @param {number}  limitNum
 */
function limitText(limitField, limitNum)
{
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}

function tcodice(e)
{
    const primo = document.getElementById("primo");
    const secondo = document.getElementById("secondo");
    const terzo = document.getElementById("terzo");
    if(e.value.length === 6){
        primo.value = e.value.substring(0,2);
        secondo.value = e.value.substring(2,4);
        terzo.value = e.value.substring(4,6);
    }
}
