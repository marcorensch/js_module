export default class Birthday{
    constructor(day,month,fullyear){
        this.day = day;
        this.month = month;
        this.fullyear = fullyear;
    }

    output(){
        return this.day +'.'+this.month+'.'+this.fullyear;
    }
}
