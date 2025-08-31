document.addEventListener("DOMContentLoaded", function () {
  const spinner = document.createElement("div");
  spinner.className = "spinner";

  document.body.appendChild(spinner);

  setTimeout(() => {
    spinner.style.display = "none"; // Скрыть спиннер через 2 секунды (время загрузки)
  }, 2000);
});
