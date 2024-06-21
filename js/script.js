document.addEventListener("DOMContentLoaded", () => {
  const navItemsWithChildren = document.querySelectorAll(".menu-item-has-children");

  navItemsWithChildren.forEach((navItem) => {
    const submenu = navItem.querySelector(".sub-menu");

    navItem.addEventListener("mouseenter", () => {
      console.log("Mouse entered", navItem);
      if (submenu) {
        submenu.classList.add("nav-active");
      }
    });

    navItem.addEventListener("mouseleave", () => {
      console.log("Mouse left", navItem);
      if (submenu) {
        submenu.classList.remove("nav-active");
      }
    });
  });
});
