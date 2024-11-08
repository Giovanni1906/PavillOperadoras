function sendAction(action) {
    const toastMessage = document.getElementById('toastMessage');
    toastMessage.innerText = action;

    const toast = new bootstrap.Toast(document.getElementById('actionToast'));
    toast.show();
}

function setAddress(address, sector) {
    const addressInput = document.getElementById('clientAddress');
    const sectionInput = document.getElementById('clientSection');
    addressInput.value = `${address}`;
    sectionInput.value = `${sector}`;
}

function accionBoton1() {
    alert('Acción del Botón 1 ejecutada.');
}

function accionBoton2() {
    alert('Acción del Botón 2 ejecutada.');
}

function accionBoton3() {
    alert('Acción del Botón 3 ejecutada.');
}

