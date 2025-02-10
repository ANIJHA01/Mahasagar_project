// Automatically open when page is load..
window.onload = function () {
  const modal = document.getElementById("editCarouselModal");
  modal.style.display = "flex";
};

// close botton
function closeModal() {
  const modal = document.getElementById("editCarouselModal");
  modal.style.display = "none";
}