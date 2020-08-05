
const CONFIG = {
  TRIGGER: '.menu-item-has-children > a',
  ELEM: '.sub-menu',
  HREF: '.sub-menu li',
  CLASS: 'd-block',
  ACTIVE: 'current-menu-item',
};

const submenu = {
  init() {
    const { TRIGGER, ELEM, CLASS, HREF, ACTIVE } = CONFIG;
    this.$trigger = document.querySelectorAll(TRIGGER);
    this.$elem = document.querySelectorAll(ELEM);
    this.$href = document.querySelectorAll(HREF);
    this.$class = CLASS;
    this.$active = ACTIVE;
    this.addEvent();
  },

  active(ACTIVE) {
    for(const item of this.$href) {
      item.classList.remove(ACTIVE);
    }
  },

  addEvent() {
    for(const item of this.$trigger) {
      item.addEventListener('click', (event) => {
        let menu = event.target.nextElementSibling;
        event.preventDefault();
        for(const el of this.$elem) {
          if(el != menu) {
            el.classList.remove(this.$class);
          }
        }
        menu.classList.toggle(this.$class);
      });
    }
  },
};

export default submenu;