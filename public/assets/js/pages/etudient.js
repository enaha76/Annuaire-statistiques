const archiveStudent = () => {
    console.log('archiveStudent called');

    const apiUrl = '/api/archiveStudent'; // Replace with your Laravel API endpoint for fetching archives

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log("Retrieved data from Laravel API", data);
            
        })
        .catch(error => {
            console.error('Error:', error);
        });

};


document.getElementById('archivage').addEventListener('click', archiveStudent);
