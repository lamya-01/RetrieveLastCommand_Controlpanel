function sendCommand(button) {
    const command = button.value;
    const formData = new FormData();
    formData.append('command', command);

    fetch('connection.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').innerText = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}