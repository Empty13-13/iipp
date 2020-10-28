function valid() {
  let formName = document.getElementsByClassName('form-elems-popup__input_name')[0];
  let formEmail = document.getElementsByClassName('form-elems-popup__input_email')[0];

  let contentName = formName.value;
  let contentEmail = formEmail.value;


  let requiredFieldMail = document.getElementsByClassName('form-elems-popup__error-text_email')[0];
  let requiredFieldName = document.getElementsByClassName('form-elems-popup__error-text_name')[0];

  let notStepSent = true;
  let go = false;
  let g02 = false;

  if (contentName.length == 0) {
    formName.classList.add('input-error');
    if (typeof requiredFieldName.innerText !== 'undefined') {
      requiredFieldName.innerText = 'Необходимо правильно запонить поле';
    } else {
      requiredFieldName.textContent = 'Необходимо правильно запонить поле';
    }
    notStepSent = false;
    go = false;
  } else {
    formName.classList.remove('input-error');
    if (typeof requiredFieldName.innerText !== 'undefined') {
      requiredFieldName.innerText = '';
    } else {
      requiredFieldName.textContent = '';
    }
    go = true;
  }

  if (contentEmail.length == 0 || !validateEmail(contentEmail)) {
    formEmail.classList.add('input-error');
    if (typeof requiredFieldMail.innerText !== 'undefined') {
      requiredFieldMail.innerText = 'Необходимо правильно запонить поле';
    } else {
      requiredFieldMail.textContent = 'Необходимо правильно запонить поле';
    }
    notStepSent = false;
    go2 = false
  } else {
    formEmail.classList.remove('input-error');
    if (typeof requiredFieldMail.innerText !== 'undefined') {
      // IE8-
      requiredFieldMail.innerText = '';
    } else {
      // Нормальные браузеры
      requiredFieldMail.textContent = '';
    }

    go2 = true
  }

  if (go && go2) {
    document.location.href = "test.html";
  }
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}