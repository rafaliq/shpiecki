const CONFIG = {
  ELEM: '.wp-block-table',
  ITEMS: 'img',
  ATTR: 'data-fancybox',
}

const TABLE_IMG = {
  init() {
      const {ELEM, ITEMS, ATTR} = CONFIG;

      this.elem = document.querySelectorAll(ELEM);
      this.items = ITEMS;
      this.attr = ATTR;

      this.eachElem();
  },

  eachElem() {
      Array.from(this.elem).forEach((element, index )=> {
          const items = element.querySelectorAll(this.items);
          const i = index;

          console.log(items);
          console.log(i);

          Array.from(items).forEach(item => {
              const src = item.getAttribute('src');
              item.setAttribute(this.attr,i);
              item.setAttribute('href', src);
          });
      });
  },
}

export default TABLE_IMG;