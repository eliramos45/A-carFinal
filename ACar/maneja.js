
function redirectToSeleccion() {
    window.location.href = "vehiculos.php";
}


function redirectToSeleccion1() {
    window.location.href = "dashboard.php";
}
function dashboard() {
    window.location.href = "dashboard.php";
}

function direccion() {
    window.location.href = "direccion.php";
}


function viaja() {
    window.location.href = "dashboard.php";
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