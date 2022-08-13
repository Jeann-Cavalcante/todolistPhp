var html = document.querySelector("html");
var moonSun = document.querySelector(".moon-sun");

function toggleMode() {
  if (html.classList.contains("dark")) {
    html.classList.remove("dark");
    html.classList.add("light");
    moonSun.innerHTML = '<i class="ph-moon-stars"></i>';
  } else {
    html.classList.remove("light");
    html.classList.add("dark");
    moonSun.innerHTML = '<i class="ph-sun"></i>';
  }
}

toggleMode();
