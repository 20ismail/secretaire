document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.save-button').addEventListener('click', function(event) {
        event.preventDefault();

        let formData = {
            _token: document.querySelector('input[name="_token"]').value,
            jeudi_matin_amphi: document.querySelector('select[name="jeudi_matin_amphi"]').value,
            jeudi_apresmidi_amphi: document.querySelector('select[name="jeudi_apresmidi_amphi"]').value,
            // Add other form data similarly
        };

        fetch('/Salle/SalleDispoResult', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Data saved successfully!');
                // Optionally redirect or update the page
            } else {
                alert('Error saving data');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
