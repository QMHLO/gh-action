window.addEventListener(
  "DOMContentLoaded",
  () => {
    const submit = document.querySelector("#modal-doc-submit");

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

        reset("#input-company_name_modal_doc", "#err-msg-input-company_name_modal_doc");
        reset("#input-email_modal_doc", "#err-msg-input-email_modal_doc");
        reset("#input-agree_modal_doc", "#err-msg-input-agree_modal_doc");

        const focus = () => document.querySelector("#input-company_name_modal_doc").focus();

        if (invalitName("#input-company_name_modal_doc", "#err-msg-input-company_name_modal_doc", "会社名は必須項目です") === false) {
          error = 1;
        }
      
        if (invalitName("#input-email_modal_doc", "#err-msg-input-email_modal_doc", "メールアドレスを正しく入力してください") === false) {
          error = 1;
        } else {
          const email = document.querySelector("#input-email_modal_doc");
          const inputbox = document.querySelector("#input-email_modal_doc");
          const errMsgEmail = document.querySelector("#err-msg-input-email_modal_doc");
          if (!validateEmail(email.value)) {
            errMsgEmail.classList.add("form-invalid");
            inputbox.classList.add("err");
            errMsgEmail.textContent = "メールアドレスが不正です。";
            email.focus();
            email.classList.add("input-invalid");
            error = 1;
          }
        }

        if (invalitName("#input-agree_modal_doc", "#err-msg-input-agree_modal_doc", "個人情報保護方針への同意は必須項目です。") === false) {
          error = 1;
        } else {
          const checkbox = document.querySelector("#input-agree_modal_doc");
          const check_errMsg = document.querySelector("#err-msg-input-agree_modal_doc");
          if (!checkAgree(checkbox)) {
            check_errMsg.classList.add("form-invalid");
            checkbox.classList.add("err");
            check_errMsg.textContent = "個人情報保護方針への同意は必須項目です。";
            error = 1;
          } else {
          }
        }

        if (error == 1) {
          callanchor();
          return;
        } else {
          document.inquiry_form_doc.submit();
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

function checkAgree(checkbox) {
  checkbox.addEventListener("change", function (event) {
    if (this.checked) {
      return true;
    }
    return false;
  });
  if (checkbox.checked) {
    return true;
  }
  return false;
}