document.addEventListener('DOMContentLoaded', () => {

    const alert = document.getElementById('alert-message');

    if (alert) {

        setTimeout(() => {

            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);

            bsAlert.close();

        }, 3100);
    }
});