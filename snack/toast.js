function _(x) {return document.getElementById(x);}
class Toast {
    constructor() {
        this.snackbar = _("snackbar");
        this.snackbtn = _("snackbtn");
        this.snacktypes = {
            error: "w3-red",
            info: "w3-blue",
            success: "w3-green"
        };
        this.snacktimeout = 3000;
    }
    snackShow(m, c) {
        if( m == "" || c == ""){ console.log('missing args!.'); }
        this.snackbtn.disabled = true;
        this.snackbar.innerHTML = m;
        this.snackbar.className = "snack " + this.snacktypes[c];
        setTimeout(function(){
            this.snackbar.className = this.snackbar.className.replace("snack", "");
            this.snackbtn.disabled = false;
        }, this.snacktimeout);
    }
}

var t = new Toast();
