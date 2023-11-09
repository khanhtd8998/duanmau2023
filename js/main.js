var album = [];
for (var i = 0; i < 5; i++) {
  album[i] = new Image();
  album[i].src = "./images/anh" + i + ".jpg";
}
var interval = setInterval(slideshow, 2000);
index = 0;
function slideshow() {
  index++;
  if (index > 4) {
    index = 0;
  }
  document.getElementById("banner").src = album[index].src;


}
function next() {
  index++;
  if (index > 4) {
    index = 0;
  }
  document.getElementById("banner").src = album[index].src;

}
function pre() {
  index--;
  if (index < 0) {
    index = 4;
  }
  document.getElementById("banner").src = album[index].src;

}

//tăng giảm số lượng sản phẩm
const quantityInput = document.querySelector("input[type='number']");
const increaseButton = document.querySelector(".increase");
const decreaseButton = document.querySelector(".decrease");

// Kiểm tra xem giá trị có < 1 hay không
function isNegative(value) {
  return value < 1;
}

increaseButton.addEventListener("click", () => {
  // Tăng số lượng
  quantityInput.value++;

  // Kiểm tra và chặn giá trị <1
  if (isNegative(quantityInput.value)) {
    quantityInput.value = 1;
  }
});

decreaseButton.addEventListener("click", () => {
  // Giảm số lượng
  quantityInput.value--;

  // Kiểm tra và chặn giá trị âm
  if (isNegative(quantityInput.value)) {
    quantityInput.value = 1;
  }
});

//SHOW PASS
function showPassword() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}