
$(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onFinished: function (event, currentIndex) {
        alert("done");
        $("#regform").submit();
       //swal("Your Order Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
            
    }
});

//wizard with validation
//show form
var form = $(".validation-wizard").show();
//initialized wizard

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    ,autofocus: true
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        /*
        if (currentIndex > newIndex) {
            return true;
        }
        if (newIndex === 2 ) {
             var lowerCaseLetters = /[a-z]/g;
              var upperCaseLetters = /[A-Z]/g;
              var numbers = /[0-9]/g;
              var myInput = document.getElementById("psw");
            if (myInput.val().match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(numbers) && myInput.value.length >= 8) {
                return true;
            } else {
                return false;
            }
        }
        if (currentIndex < newIndex) {
            form.find(".body:eq(" + newIndex + ") label.error"). remove();
            form.find(".body:eq(" + newIndex + ") .error"). removeClass("error");
        }
        */
         var lowerCaseLetters = /[a-z]/g;
              var upperCaseLetters = /[A-Z]/g;
              var numbers = /[0-9]/g;
              var myInput = document.getElementById("psw");
        return currentIndex > newIndex || !(2 === newIndex && myInput.value.length < 8 ) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    /*
    , onStepChanging: function (event, currentIndex, priorIndex) {
         if (currentIndex === 2 && priorIndex === 3) {
            form.steps("previous");
         }
    }   
    */ 
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
           $('button[type="submit"]').trigger('click');
        //  $("#regform").submit();
        // swal("Your Form Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})