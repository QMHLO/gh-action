window.addEventListener(
  "DOMContentLoaded",
  () => {
    const submit = document.querySelector("#modal-contact-submit");

    function reset(input_infomation, error_message) {
      const input_info = document.querySelector(input_infomation);
      const err_message = document.querySelector(error_message);
      err_message.textContent = "";
      input_info.classList.remove("input-invalid");
      input_info.classList.remove("err");
    }

    function invalitName(input_target, error_target, error_message) {
      const name = document.querySelector(input_target);
      const errMsgName = document.querySelector(error_target);

      if (!name.value) {
        errMsgName.classList.add("form-invalid");
        errMsgName.textContent = error_message;
        name.focus();
        name.classList.add("input-invalid");
        name.classList.add("err");
        // 動作を止める
        return false;
      }
      // 動作を進める
      errMsgName.classList.remove("form-invalid");
      return true;
    }

    submit?.addEventListener(
      "click",
      (e) => {
        // デフォルトアクションをキャンセル
        e.preventDefault();
        var error = 0;

        reset("#input-company_name_modal", "#err-msg-input-company_name_modal");
        reset("#input-name_modal", "#err-msg-input-name_modal");
        reset("#input-email_modal", "#err-msg-input-email_modal");
        reset("#input-phno_modal", "#err-msg-input-phno_modal");
        reset("#input-content_inquiry_modal", "#err-msg-input-content_inquiry_modal");

        const focus = () => document.querySelector("#input-company_name_modal").focus();

        if (invalitName("#input-company_name_modal", "#err-msg-input-company_name_modal", "会社名は必須項目です") === false) {
          error = 1;
        }
        if (invalitName("#input-name_modal", "#err-msg-input-name_modal", "お名前は必須項目です") === false) {
          error = 1;
        }

        if (invalitName("#input-content_inquiry_modal", "#err-msg-input-content_inquiry_modal", "お問い合わせ内容は必須項目です") === false) {
          error = 1;
        }

        if (invalitName("#input-phno_modal", "#err-msg-input-phno_modal", "電話番号は必須項目です") === false) {
          error = 1;
        } else {
          const tel01 = document.querySelector("#input-phno_modal");
          const inputbox = document.querySelector("#input-phno_modal");
          const errMsgtel01 = document.querySelector("#err-msg-input-phno_modal");
          if (!isDigitOnly(tel01.value)) {
            errMsgtel01.classList.add("form-invalid");
            inputbox.classList.add("err");
            errMsgtel01.textContent = "半角数字でご記入ください。";
            tel01.focus();
            tel01.classList.add("input-invalid");
            error = 1;
          }
        }
        // 「メールアドレス」入力欄の空欄チェック
        if (invalitName("#input-email_modal", "#err-msg-input-email_modal", "メールアドレスを正しく入力してください") === false) {
          error = 1;
        } else {
          const email = document.querySelector("#input-email_modal");
          const inputbox = document.querySelector("#input-email_modal");
          const errMsgEmail = document.querySelector("#err-msg-input-email_modal");
          if (!validateEmail(email.value)) {
            errMsgEmail.classList.add("form-invalid");
            inputbox.classList.add("err");
            errMsgEmail.textContent = "メールアドレスが不正です。";
            email.focus();
            email.classList.add("input-invalid");
            error = 1;
          }
        }

        if (error == 1) {
          callanchor();
          return;
        } else {
          document.inquiry_form_modal.submit();
        }
      },
      false
    );
  },
  false
);

function callanchor() {
  $(".input-invalid").each(function () {
    $("html,body").animate({ scrollTop: $("form").offset().top - 250 }, 0);
  });
}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function isDigitOnly(input) {
  const digitOnlyRegex = /^\d+$/;
  return digitOnlyRegex.test(input);
}
