var modal = document.getElementById("myModal");
var btn = document.getElementById("login-btn");
var span = document.getElementsByClassName("close")[0];
var form = document.getElementById("login-form");
btn.onclick = function () {
              modal.style.display = "block";
            };
span.onclick = function () {
              modal.style.display = "none";
            };
window.onclick = function (event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            };
function clearLoginForm() {
              form.reset();
          }
var modal1 = document.getElementById("myModal2");
var btn1 = document.getElementById("signin-btn");
var span1 = document.getElementsByClassName("close")[1];
var form1 = document.getElementById("signin-form");
btn1.onclick = function () {
              modal1.style.display = "block";
            };
span1.onclick = function () {
              modal1.style.display = "none";
            };
window.onclick = function (event) {
              if (event.target == modal1) {
                modal1.style.display = "none";
              }
            };
function clearSigninForm() {
              form1.reset();
          }