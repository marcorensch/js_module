export default class User{
    constructor(firstname, lastname, birthday, notes = ""){
        this.firstname = firstname;
        this.lastname = lastname;
        this.fullname = this.firstname + " " + this.lastname;
        this.notes = notes;
        this.birthday = birthday;
    }
}