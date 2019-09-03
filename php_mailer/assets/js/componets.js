//Goback
function goBack() {
    window.history.back();
}

//Extra functions for scroll to objects
function scrollToObject(selector,callback){
    $("html, body").animate({"scrollTop":selector.offset().top-120},500,callback);  
}

//Disable inputs and open ajax loader
function openLoader(parent,disable,text){
    if (disable) {
        $(parent).find(".submit span").html(text);
        $(parent).find(".submit img").removeClass("hidden");
    }
    else{
        $(parent).find(".submit span").html(text);
        $(parent).find(".submit img").addClass("hidden");
    }
    $(parent).find("button,select,textarea,input").prop("disabled",disable);
}

// General json response message (msg in div)
function showResponseMSG(parent,message,type) {
    if (type==="success") {
        $(parent).find(".check-error").removeClass("alert alert-danger");
        $(parent).find(".check-error").removeClass("hidden");
        $(parent).find(".check-error p").html(message).parent().addClass("alert alert-success").css({"border-left":"5px solid #3c763d"}).fadeIn();
    }
    else{
        $(parent).find(".check-error").removeClass("alert alert-success");
        $(parent).find(".check-error").removeClass("hidden");
        $(parent).find(".check-error p").html(message).parent().addClass("alert alert-danger").css({"border-left":"5px solid #c0445f"}).fadeIn();
    }
}

//General functions for handling forms data
function submitFormData(form,btnText,file,normal,before,after,message,debugError,scroll) {
    before();
    var param = $(form).serialize();
    // Open ajax loader on submit
    openLoader(form,true,btnText[0]); 
    $.post(HANDLER+file+ENV,param,function(result){
        //Close ajax loader
        openLoader(form,false,btnText[1]);
        
        debugError(result);
        //When set to true, form will be submited.
        if (normal) {
            var data=JSON.parse(result);
            if (data.response===RESPONSE_SUCCESS) {
                after(data.message,"success");
                if (scroll) {
                    scrollToObject($(form));
                }
            }
            else{
                message(data.message,"danger");
                if (scroll) {
                    scrollToObject($(form));
                }
            }
        }
    });
    
    return false;
}