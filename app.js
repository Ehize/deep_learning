const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");


//used Ajax here
const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      const divCpu = document.createElement("div");
      divCpu.className = "alicia visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody.append(divUser);
      setTimeout(() => {
        chatBody.append(divCpu);
      }, 500);
    }
  };
  xhr.open("GET", "bot/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat.value == "") {
  } else {
    getMessage(chat.value);
    chat.value = "";
  }
});
