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
