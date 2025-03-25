// document.addEventListener("DOMContentLoaded", function () {
//     const cards = document.querySelectorAll(".musician-card");
  
//     cards.forEach((card) => {
//       card.addEventListener("click", function () {
//         const description = card.getAttribute("data-description") || "No description available.";
//         alert(description);
//       });
//     });
//   });
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".musician-card");
    const popup = document.getElementById("description-popup");
    const popupName = document.getElementById("popup-name");
    const popupDescription = document.getElementById("popup-description");
    const closeBtn = document.getElementById("close-popup");
  
    cards.forEach((card) => {
      card.addEventListener("click", () => {
        const name = card.getAttribute("data-name");
        const description = card.getAttribute("data-description");
  
        popupName.textContent = name;
        popupDescription.textContent = description;
        popup.classList.remove("d-none");
      });
    });
  
    closeBtn.addEventListener("click", () => {
      popup.classList.add("d-none");
    });
  
    popup.addEventListener("click", (e) => {
      if (e.target === popup) {
        popup.classList.add("d-none");
      }
    });
  });
  