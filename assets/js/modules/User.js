export default class User{
    constructor(firstname, lastname, birthday, notes = "", email, phone){
        this.firstname = firstname;
        this.lastname = lastname;
        this.fullname = this.firstname + " " + this.lastname;
        this.notes = notes;
        this.birthday = birthday;
        this.email = email;
        this.phone = phone;
    }
}
