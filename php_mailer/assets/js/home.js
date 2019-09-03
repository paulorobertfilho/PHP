var sendText = "Send"; var sendingText = "Sending...";

function sendMail(form){
    return submitFormData(form,[sendingText, sendText],'sendmail',true,function(){},function(m, t){
        // when success
        showResponseMSG(form,m,t);
    },function(m, t){
        // error messages
        showResponseMSG(form,m,t);
    },function(e){
        // debugger
    },false);
}


