
document.getElementById('validateForm').addEventListener('submit', function(event){
    event.preventDefault();

    var email = document.getElementById('email').value.trim();
    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value.trim();
    var c_password = document.getElementById('c_password').value.trim();

    if(username !== '' && password !== '' && email!=='')
    {
        if(username.length<5 || username.lenght >20)
        {
            document.getElementById('errore_mess').textContent = "La lunghezza dell'username deve essere compresa tra i 5 e i 20 caratteri";
            document.getElementById('errore_mess').style.display = 'flex';     
        }
        else if(password.length<8 || password.length >20)
        {
            document.getElementById('errore_mess').textContent = "La lunghezza della password deve essere compresa tra i 8 e i 20 caratteri";
            document.getElementById('errore_mess').style.display = 'flex';
        }else if(email.length<10)
        {
            document.getElementById('errore_mess').textContent = "La lunghezza dell'email deve essere almeno di 10 caratteri";
            document.getElementById('errore_mess').style.display = 'flex';
        }
        else{
            var xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/check_register.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            if(xhr.status === 200)
            {
                var response = JSON.parse(xhr.responseText);

                if(response.success)
                {
                    window.location.href = 'index.php';
                }
                else{
                    document.getElementById('errore_mess').textContent = response.message;
                    document.getElementById('errore_mess').style.display = 'block';
                }
            }
        };

        xhr.onerror = function() {
            // Gestione degli errori della richiesta AJAX
            console.error('Errore nella richiesta AJAX');
        };
        xhr.send('username=' + encodeURIComponent(username) + '&email=' + encodeURIComponent(email) +  '&password=' + encodeURIComponent(password) + '&c_password=' + encodeURIComponent(c_password));
    }

        }
        
        
});

