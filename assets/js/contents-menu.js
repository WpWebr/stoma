if (document.querySelector('#soderjanie')) {
  //<div id="soderjanie"></div> - вставить содержание
  const tegPunct = 'h2';//теги, классы по которыи ищем, череззапятую
  const heightHeeder = 'header';//элемент высоту соторого нужно вычесть при прокрутке
  const headers = [];
  const indexes = [0];
  const getPrevHeader = (diff = 0) => {
    if ((indexes.length - diff) === 0) {
      return null;
    }
    let header = headers[indexes[0]];
    for (let i = 1, length = indexes.length - diff; i < length; i++) {
      header = header.contains[indexes[i]];
    }
    return header;
  }
  const addItemToHeaders = (el, diff) => {
    let header = headers;
    if (diff === 0) {
      header = indexes.length > 1 ? getPrevHeader(1).contains : header;
      indexes.length > 1 ? indexes[indexes.length - 1]++ : indexes[0]++;
    } else if (diff > 0) {
      header = getPrevHeader().contains;
      indexes.push(0);
    } else if (diff < 0) {
      const parentHeader = getPrevHeader(Math.abs(diff) + 1);
      for (let i = 0; i < Math.abs(diff); i++) {
        indexes.pop();
      }
      header = parentHeader ? parentHeader.contains : header;
      parentHeader ? indexes[indexes.length - 1]++ : indexes[0]++;
    }
    header.push({ el, contains: [] });
  }

  let arr = document.querySelectorAll(tegPunct);

  // добавим заголовки в headers
  arr.forEach((el, index) => {
    if (el.textContent != 'Ваша корзина' && el.textContent != 'Элементы для копирования:') {
      if (!el.id) {
        el.id = `id-${index}`;
      }
      if (!index) {
        addItemToHeaders(el);
        return;
      }
      const diff = el.tagName.substring(1) - getPrevHeader().el.tagName.substring(1);
      addItemToHeaders(el, diff);
    }
  });
  // сформируем оглавление страницы для вставки его на страницу
  let html = '';
  const createTableOfContents = (items) => {
    html += '<ul>';
    for (let i = 0, length = items.length; i < length; i++) {
      const url = `${location.href.split('#')[0]}#${items[i].el.id}`;

      html += `<li><a href="${url}">${items[i].el.textContent}</a>`;

      if (items[i].contains.length) {
        createTableOfContents(items[i].contains);
      }
      html += '</li>';
    }
    html += '<ul>';
  }
  createTableOfContents(headers);
  html = `<div class="wrap"><div class="soderzhanie__cont"><div class="soderzhanie__div"><h3 class="titles soderzhanie__titl">Содержание страницы:</h3>${html}</div></div>`;
  // вставим оглавление в тег c id <#soderjanie>
  document.querySelector('#soderjanie').insertAdjacentHTML('afterbegin', html);

  //Плавная прокрутка
  const menuLinks = document.querySelectorAll('a[href*="#"]');
  if (menuLinks.length > 0) {
    menuLinks.forEach(menuLink => {
      menuLink.addEventListener("click", onMenuLinkClic);
    });

    function onMenuLinkClic(e) {
      const menuLink = e.target;
      const hrefLink = menuLink.getAttribute('href');
      const gotoBlock = document.getElementById(hrefLink.substr(hrefLink.indexOf("#") + 1));
      let gotoBlockValue;

      if (document.documentElement.clientWidth < 730) {
        gotoBlockValue = gotoBlock.getBoundingClientRect().top + window.pageYOffset - document.querySelector(heightHeeder).offsetHeight - 10;
      } else {
        gotoBlockValue = gotoBlock.getBoundingClientRect().top + window.pageYOffset - 40;
      }

      window.scrollTo({
        top: gotoBlockValue,
        behavior: "smooth"
      });
      e.preventDefault();
    }
  }
}
