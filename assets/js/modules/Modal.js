export default class Modal {
    constructor(elementId){
        this.el = document.getElementById(elementId);
    }

    toggle(){
        console.log(this.el)
        if(!this.el.classList.contains('visible')){
            this.el.classList.add('visible');
            this.el.classList.remove('hidden');
        }else{
            this.el.classList.remove('visible');
            this.el.classList.add('hidden');
        }

    }
}
