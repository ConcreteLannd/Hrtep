jQuery(function() {

  // contact form validate
  var $form = $('#contactForm');
  $.validator.messages.required = "※必須項目です";
  $.validator.messages.email = "※正しいメールアドレスを入力してください";
  $.validator.messages.phone = "※正しいメールアドレスを入力してください";


  $form.validate({
    errorClass: 'c-error',
    errorPlacement: function (error, element) {
      if (element.attr('name') == 'interested_name[]') {
        // error.insertAfter(element.parents('.c-form_interestedName .c-inputList'));
      } else {
        error.appendTo(element.parents('.c-form_group_input'));
      }
    },

    rules: {
      company_name: 'required',
      name: 'required',
      address: 'required',
      phone: {
        required: true,
        number: true
      },
      name_charge: 'required',
      email_charge: {
        required: true,
        email: true
      },
      'license_registration_number[]': 'required',
      access: 'required',
    },

    messages: {
    },
    submitHandler: function ($form) {
      $form.submit();
    },
  });

  // download form validate
  var $downloadForm = $('#downloadForm');
  $downloadForm.validate({
    errorClass: 'c-error',
    errorPlacement: function (error, element) {
      if (element.attr('name') == 'interested_name[]') {
        // error.insertAfter(element.parents('.c-form_interestedName .c-inputList'));
      } else {
        error.appendTo(element.parents('.c-form_group_input'));
      }
    },

    rules: {
      company_name: 'required',
      name1: 'required',
      name2: 'required',
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        number: true
      },
      pref: 'required',
      access: 'required',
    },

    messages: {
    },
    submitHandler: function ($downloadForm) {
      $downloadForm.submit();
    },
  });

});
