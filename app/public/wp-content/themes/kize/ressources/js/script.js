// function apiCall () {
// const url = "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=Crest&country=France&language=french";
//
// fetch(url)
//     .then(response => response.json())
//     .then(data => {
//         // Utilisez les données de la réponse de l'API ici
//         // console.log([data.temp, data.description, data.icon]);
//         return '<div>data.temp</div>'
//         // [data.temp, data.description, data.icon]
//     })
//     .catch(error => {
//         // Gérez les erreurs ici
//         console.log("Une erreur s'est produite :", error);
//     });
//*
// }
function apiCall() {
    const resultDiv = document.getElementById('result');
    const city = resultDiv.getAttribute('data-city');
    const country = resultDiv.getAttribute('data-country');

    const url = "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=" + city + "&country=" + country + "&language=french";

    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            document.getElementById('result').innerHTML = 'temp : '
                + data.temp +'°'
                + '<br>'
                + '<img src="'+ data.icon +'" alt="weatherIcon">'
                + '<br>'
                + data.description;
        })
        .catch(error => {
            console.log("Une erreur s'est produite :", error);
        });
}

// Appelez la fonction apiCall()
apiCall();


// Appelez la fonction apiCall()
apiCall();


// document.addEventListener('DOMContentLoaded', function () {
//     apiCall();
//     // console.log(apiCall())
// });

