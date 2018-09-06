export default {
  init() {
    // JavaScript to be fired on all pages

    /* navigation sub-menu display */

    const subMenus = document.querySelectorAll(".sub-menu");

    subMenus.forEach(subMenu => {
      subMenu.parentElement.addEventListener("mouseover", () => {
        subMenu.style.display = "block";
      });
      subMenu.parentElement.addEventListener("mouseout", () => {
        subMenu.style.display = "none";
      });
    });

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
