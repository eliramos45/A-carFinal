
function manejaAhora() {
    window.location.href = "maneja.php";
}


function redirectToSeleccion() {
    window.location.href = "pago.php";
}


function redirectToSeleccion1() {
    window.location.href = "seleccionViaja.php";
}

function viaja() {
    window.location.href = "viaja.php";
}


function redirectSoporte() {
    window.location.href = "soporte.php";
}


const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

const appendAlert = (message, type) => {
    const wrapper = document.createElement('div');
    wrapper.innerHTML = `
        <div class="alert alert-${type} alert-dismissible" role="alert">
            <div>${message}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;

    alertPlaceholder.innerHTML = ''; // Clear previous alerts
    alertPlaceholder.append(wrapper);
};

const alertTrigger = document.getElementById('liveAlertBtn');
if (alertTrigger) {
    alertTrigger.addEventListener('click', () => {
        appendAlert('Nice, you triggered this alert message!', 'success');
    });
}

if (alertTrigger) {
    alertTrigger.addEventListener('click', () => {
        window.location.href = "dashboard.php";
    });
}