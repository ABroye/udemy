// CONTACT FORM
function contactForm() {

  var scrollElement = $('html,body');
  var	contactForm = $('.contact-form');
  var	form_msg_timeout;

  contactForm.on( 'submit', function() {

    var requiredFields = $(this).find('.required');
    var	formFields = $(this).find('input, textarea');
    var	formData = contactForm.serialize();
    var	formAction = $(this).attr('action');
    var	formSubmitMessage = $('.response-message');

    requiredFields.each(function() {

      if( $(this).val() == "" ) {
        $(this).addClass('input-error');
      } else {
        $(this).removeClass('input-error');
      }

    });

    function validateEmail(email) { 
      var exp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return exp.test(email);
    }

    var emailField = $('.contact-form-email');

    if( !validateEmail(emailField.val()) ) {
      emailField.addClass('input-error');
    }

    if ($('.contact-form :input').hasClass('input-error')) {
      return false;
    } else {
    
      clearTimeout(form_msg_timeout);
      
      $.post(formAction, formData, function(data) {
        formSubmitMessage.text(data);

        formFields.val('');

        form_msg_timeout = setTimeout(function() {
          formSubmitMessage.slideUp();
        }, 5000);
      });

    }

    return false;

  });

};

// Message de confirmation d'envoie de mail

var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Votre message a bien été envoyé !', 'success')
  })
}
