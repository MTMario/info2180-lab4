window.onload = function() {

    let buttonSearch =  document.querySelector('#search');

    buttonSearch.addEventListener('click', function(element) {
        element.preventDefault();

        






        fetch("superheroes.php")
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                let heroes = document.querySelector('#quote');
                quote.innerHTML = data;
            })
            .catch(error => console.log('There was an error: ' + error));
    });
});