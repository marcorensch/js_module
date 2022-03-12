import { docReady, usersArray } from '../main.js';

docReady(function(){

    let tableBody = document.getElementById("table").querySelector('tbody');

    // Browsersupport-Check, indem die Existenz des content Attributs
    // des template Elements geprüft wird.
    if ('content' in document.createElement('template')) {

        // Tabelle mit dem existierenden HTML tbody und der Zeile (row) aus dem template Element instantiieren
        let t = document.querySelector('#tablerow');

        // Zeile für jedes Element hinzufügen
        for (const user of usersArray) {
            let td = t.content.querySelectorAll("td");
            td[0].textContent = user.firstname;
            td[1].textContent = user.lastname;
            td[2].textContent = user.birthday.output();
            td[3].textContent = user.email;
            td[4].textContent = user.phone;

            // Neue Zeile (row) klonen und in die Tabelle einfügen
            // var tb = document.getElementsByTagName("tbody");
            var clone = document.importNode(t.content, true);
            tableBody.appendChild(clone);
        }
    } else {
        // Wenn das HTML template element nicht unterstützt wird
        // muss die Tabelle auf anderem Weg erzeugt werden
    }

});
