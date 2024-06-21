document.addEventListener("DOMContentLoaded", function() {
  function toggleContent(element) {
      const content = element.nextElementSibling;
      if (content.style.maxHeight) {
          content.style.maxHeight = null;
      } else {
          content.style.maxHeight = content.scrollHeight + "px";
      }
  }
  window.toggleContent = toggleContent;
});
