import User from './modules/User.js';
import Birthday from './modules/Birthday.js';
import Modal from './modules/Modal.js';

let user = new User("Marco","Rensch", new Birthday(18,7,1986), "Meine Notiz", "marco.rensch@bluewin.ch", "+41791234567");

console.log(user);

let usersArray = [];
usersArray.push(user);
usersArray.push(new User("Nicole","Muggwyler", new Birthday(29,8,1988),"","nicole_muggwyler@hotmail.com","+41791234567"))

docReady(function() {
    // DOM is loaded and ready for manipulation here
    let modals = document.getElementsByClassName('modal')

    let modalToggler = document.getElementsByClassName('nx-modal');
    for(let item of modalToggler){
        let modalId = item.getAttribute('nx-modal');
        let modal = new Modal (modalId);
        console.log(document.getElementById(modalId).querySelector('.modal-close'))
        document.getElementById(modalId).querySelector('.modal-close').addEventListener('click',(e) => {
            modal.toggle()
        })
        item.addEventListener('click', function(e){
            modal.toggle();
        })
    }
});


function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

export { docReady, usersArray }
