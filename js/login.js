document.getElementById('validateForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita il comportamento predefinito di inviare il form

    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value.trim();

    // Effettua la chiamata AJAX solo se entrambi i campi sono compilati
    if (username !== '' && password !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/check_login.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Reindirizza l'utente alla pagina di home o esegui altre azioni
                    window.location.href = 'index.php';
                } else {
                    // Visualizza un messaggio di errore
                    document.getElementById('errore_mess').textContent = response.message;
                    document.getElementById('errore_mess').style.display = 'block';
                }
            } else {
                console.error('Errore durante la richiesta AJAX:', xhr.status);
            }
        };

        xhr.onerror = function() {
            console.error('Errore di connessione AJAX.');
        };

        xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
    }
    
});