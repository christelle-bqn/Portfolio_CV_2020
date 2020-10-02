(function($) { 
	jQuery(document).ready(function(){
        $('.form').on("submit", function(event) {
            if(event.isDefaultPrevented()) {

            } else {
                event.preventDefault();
                submitForm();
            }

            function submitForm() {
                $.ajax({
                    type: "POST",
                    url: "contact.php",
                    data: $('.form').serialize(),
                    success : function(text){
                        if (text == "Message envoyé"){
                            formSuccess(text);
                        } else {
                            formError(text);
                        }
                    }
                });
            }

            function formSuccess(text){
                $(".form")[0].reset();
                submitMSG(true, text);
            }

            function formError(text){
                $(".form")[0].reset();
                submitMSG(false, text);
            }

            function submitMSG(valid, msg){
                var msgClasses;
                if(valid){
                    msgClasses = "text-success";
                } else {
                    msgClasses = "text-danger";
                }
                $(".contact__form__msgSubmit").addClass(msgClasses).text(msg);
            }
        });
    });
}(jQuery));