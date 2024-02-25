function showVerifyCodeModal() {
  var modal = document.getElementById("verifyCodeModal");
  var backdrop = document.getElementById("modal-backdrop");
  modal.classList.remove("hidden");
  backdrop.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
}

function hideVerifyCodeModal() {
  var modal = document.getElementById("verifyCodeModal");
  var backdrop = document.getElementById("modal-backdrop");
  modal.classList.add("hidden");
  backdrop.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
}

async function forgotPassword() {
  const email = document.getElementById("email").value;
  try {
    const response = await fetch(
      "/controllers/verifyCodeController.php?email=" + email
    );
    if (response.ok) {
      const responseData = await response.text();
      if (responseData.trim() === "Success") {
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML =
          "Verification code has been sent successfully. Please check your email.";
        document.getElementById("msgToast").classList.add("border-green-500");
        document.getElementById("msgIcon").classList.add("bg-green-500");
        setTimeout(function () {
          document.getElementById("msgToast").classList.add("hidden");
          showVerifyCodeModal();
        }, 1000);
      } else {
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML = responseData;
        setTimeout(() => {
          document.getElementById("msgToast").classList.add("hidden");
        }, 1000);
      }
    } else {
      throw new Error("Network Error.");
    }
  } catch (error) {
    console.error("Fetch error:", error);
  }
}
let email_global = "";

function verifyCode() {
  const email = document.getElementById("email").value;

  email_global = email;
  const verification_code = document.getElementById("verification_code").value;
  const request = new XMLHttpRequest();
  const form = new FormData();
  form.append("verification_code", verification_code);
  form.append("email", email);
  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      if (request.responseText == "success") {
        openForgotPasswordModel();
      } else {
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML = request.responseText;
        document
          .getElementById("msgToast")
          .classList.remove("border-green-500");
        document.getElementById("msgToast").classList.add("border-red-500");
        document.getElementById("msgIcon").classList.remove("bg-green-500");
        document.getElementById("msgIcon").classList.add("bg-red-500");
        document.getElementById("verifyCodeModal").classList.add("hidden");
        document.getElementById("modal-backdrop").classList.add("hidden");
        setTimeout(function () {
          document.getElementById("msgToast").classList.add("hidden");
          showVerifyCodeModal();
        }, 2000);
      }
    }
  };
  request.open("POST", "./controllers/verifyCode2Controller.php", true);
  request.send(form);
}

function openForgotPasswordModel() {
  document.getElementById("verifyCodeModal").classList.add("hidden");
  document.getElementById("fpmodal").classList.remove("hidden");
}

// forgotpassword

function showForgotPasswordModal() {
  var modal = document.getElementById("fpmodal");
  var backdrop = document.getElementById("modal-backdrop");
  modal.classList.remove("hidden");
  backdrop.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
}

function hideForgotPasswordModal() {
  var modal = document.getElementById("fpmodal");
  var backdrop = document.getElementById("modal-backdrop");
  modal.classList.add("hidden");
  backdrop.classList.add("hidden");
  // visibility_off
  document.body.classList.remove("overflow-hidden");
}
function resetPassword() {
  const type_email = email_global;
  const type_password = document.getElementById("type_password").value;
  const type_retype_password = document.getElementById(
    "type_retype_password"
  ).value;
  const request = new XMLHttpRequest();

  if (type_email && type_password && type_retype_password) {
    const form = new FormData();
    form.append("email", type_email);
    form.append("password", type_password);
    form.append("retype_password", type_retype_password);
    request.onreadystatechange = () => {
      if (request.readyState == 4 && request.status == 200) {
        if (request.responseText == "success") {
          document.getElementById("fpmodal").classList.add("hidden");
          document.getElementById("modal-backdrop").classList.add("hidden");

          document.getElementById("msgToast").classList.remove("hidden");
          document.getElementById("msg").innerHTML = "Password Changed";
          document
            .getElementById("msgToast")
            .classList.remove("border-orange-500");
          document.getElementById("msgToast").classList.add("border-green-500");
          document.getElementById("msgIcon").classList.remove("bg-orange-500");
          document.getElementById("msgIcon").classList.add("bg-green-500");
          setTimeout(() => {
            document.getElementById("msgToast").classList.add("hidden");
            document.getElementById("modal-backdrop").classList.add("hidden");

            document.getElementById("msgToast").classList.add("hidden");
            window.location.reload();
          }, 2000);
        } else {
          document.getElementById("fpmodal").classList.add("hidden");
          document.getElementById("modal-backdrop").classList.add("hidden");

          document.getElementById("msgToast").classList.remove("hidden");
          document.getElementById("msg").innerHTML = request.responseText;
          document
            .getElementById("msgToast")
            .classList.remove("border-green-500");
          document
            .getElementById("msgToast")
            .classList.add("border-orange-500");
          document.getElementById("msgIcon").classList.remove("bg-green-500");
          document.getElementById("msgIcon").classList.add("bg-orange-500");
          setTimeout(() => {
            document.getElementById("fpmodal").classList.remove("hidden");
            document
              .getElementById("modal-backdrop")
              .classList.remove("hidden");

            document.getElementById("msgToast").classList.remove("hidden");
          }, 2000);
        }
      }
    };
    request.open("POST", "./controllers/resetPasswordController.php", true);
    request.send(form);
  } else {
    alert("passwords cannot be empty");
  }
}

