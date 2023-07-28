// navbar dropdown menu
let dropdownItem = document.querySelectorAll('a[data-toggle="dropdown"]')
let dropdownMenu = document.querySelector(".custom-dropdown-menu");

for (i = 1; i < dropdownItem.length; i++) {
  dropdownItem.addEventListener('click', () => {
    console.log("click")
  })
}