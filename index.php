<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mentores | Space Apps Brasília 2020</title>
  </head>

  <style>
    *,
    *:before,
    *:after {
      margin: 0;
      padding: 0;
      outline: 0;
      box-sizing: border-box;
    }

    body {
      font-size: 62.5%;

      --text: #333;
      --bg: #eee;
      --bgFigure: #fff;
      --bgOnline: #5235aa;
      --shadow: #00000066;
      --border: #1e98fd;

      --headerText: #fff;
      --headerHeight: 8.5rem;

      --cardBg: #fff;
      --cardSideStart: #06fca5;
      --cardSideEnd: #1e98fd;

      color: var(--text);
      background: var(--bg);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    @media (max-width: 62rem) {
      body {
        --headerHeight: 10rem;
      }
    }

    a,
    a:hover,
    a:visited {
      text-decoration: none;
      color: inherit;
    }

    header {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: var(--headerHeight);

      background-color: var(--bg);
      -webkit-box-shadow: 0.8rem 0.8rem 1.6rem -0.8rem var(--shadow);
      -moz-box-shadow: 0.8rem 0.8rem 1.6rem -0.8rem var(--shadow);
      box-shadow: 0.8rem 0.8rem 1.6rem -0.8rem var(--shadow);

      display: flex;
      flex-direction: column;
      justify-content: center;

      z-index: 2;
    }

    header h1 {
      color: var(--border);
      text-align: center;
      font-size: 2rem;
      margin: 1rem 1rem;
    }

    header div.search-field {
      display: flex;
      flex-direction: row;
      width: 90%;
      margin: 0.5rem 5%;
      height: fit-content;
      border: 0.25rem solid var(--border);
      border-radius: 0.25rem;
      color: var(--headerText);
      background-color: var(--border);
    }

    header div.search-field input {
      width: calc(100% - 5rem);
      height: 2rem;
      border: none;
      border-radius: 0.25rem;
      font-size: 1rem;
      padding: 0 0.5rem;
    }

    header div.search-field label {
      width: 8rem;
      color: var(--bgFigure);
      padding-top: 0.2rem;
      text-align: center;
      font-size: 1.4rem;
      font-weight: 400;
    }

    main {
      margin-top: var(--headerHeight);
      padding: 1rem;

      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .spinner {
      border: 1.25rem solid var(--cardBg);
      border-left-color: var(--cardSideEnd);
      height: 10rem;
      width: 10rem;
      margin: 5rem 0;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    .noregister {
      text-align: center;
      margin: 2rem 0;
      font-size: 2rem;
      opacity: 0.6;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    article {
      width: 25rem;
      min-height: 15rem;
      margin: 0.5rem;
      border-radius: 1rem;

      background-color: var(--cardBg);
      -webkit-box-shadow: 0 0.8rem 1.6rem -0.8rem var(--shadow);
      -moz-box-shadow: 0 0.8rem 1.6rem -0.8rem var(--shadow);
      box-shadow: 0 0.8rem 1.6rem -0.8rem var(--shadow);

      display: flex;
      flex-direction: row;
      transition: all 0.5s;
    }

    article:hover {
      cursor: pointer;
      transform: translateY(-0.5rem);
      -webkit-box-shadow: 0.4rem 1.2rem 1.6rem -0.8rem var(--shadow);
      -moz-box-shadow: 0.4rem 1.2rem 1.6rem -0.8rem var(--shadow);
      box-shadow: 0.4rem 1.2rem 1.6rem -0.8rem var(--shadow);
    }

    article .left {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1rem;

      border-radius: 1rem 0 0 1rem;
      background: var(--cardSideStart);
      background: linear-gradient(
        215deg,
        var(--cardSideStart) 0%,
        var(--cardSideEnd) 50%
      );
    }

    article .left figure {
      height: 6rem;
      width: 6rem;
      margin-bottom: 0.5rem;
      overflow: hidden;
      border: 0.2rem solid var(--bgFigure);
      border-radius: 50%;
      background-color: var(--cardBg);
      background-size: cover;
      background-position: center;
    }

    article .left .schedule {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-top: 0.5rem;
    }

    article .left .schedule div {
      color: var(--bgFigure);
      font-size: 0.75rem;
      font-weight: 400;
      background-color: var(--bgOnline);
      border-radius: 0.25rem;
      padding: 0.2rem 0.25rem;
      margin: 0 0.1rem 0.1rem 0;
    }

    article .left .schedule div.disabled {
      background-color: #cccccc55;
    }

    article .right {
      padding: 1rem;
    }

    article .right h1,
    article .right h3,
    article .right p {
      width: 100%;
      font-size: 1.8rem;
      font-weight: 400;
      text-align: left;
    }

    article .right h3 {
      font-size: 1rem;
      opacity: 0.6;
    }

    article .right p {
      font-size: 0.9rem;
      font-weight: 300;
      margin: 1rem 0;
    }

    footer {
      margin: 1rem 0 0;
      padding: 2rem 0 3rem;
      background-color: var(--bgFigure);
    }

    footer h1 {
      text-align: center;
      font-size: 1.4rem;
      font-weight: 500;
      margin: 3rem 0 1rem;
    }

    footer .logos {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    footer img {
      height: 7rem;
      width: auto;
      margin: 0 1rem;
    }
  </style>

  <body>
    <header>
      <h1>Mentores | Space Apps Challenge Brasília 2020</h1>
      <div class="search-field">
        <input
          id="search"
          type="text"
          placeholder="Pesquisar mentores por nome, título ou descrição"
          onInput="search()"
        />
        <label for="search">Pesquisa</label>
      </div>
    </header>

    <main>
      <div class="spinner"></div>
    </main>

    <footer>
      

      <!-- <h1>Real</h1> -->
      <div class="logos">
        <img
          src="https://spaceappsriopreto.com/wp-content/uploads/2020/08/nasa-300x246.png"
        />
        <img
          src="https://spaceappsriopreto.com/wp-content/uploads/2020/08/Nasa-Logo-2020-300x300.png"
        />
        <img
          src="https://spaceappsriopreto.com/wp-content/uploads/2020/08/N.S.A.C.logo_-300x275.png"
        />
      </div>
    </footer>
  </body>
  <script src="data.js"></script>
  <script>
    var mentores;

    function sortName(a, b) {
      if (a.name < b.name) {
        return -1;
      }
      if (a.name > b.name) {
        return 1;
      }
      return 0;
    }

    String.prototype.norm = function () {
      return this.toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "");
    };

    function filterText(mentor) {
      var textSearch = document.querySelector("#search").value.norm();
      if (textSearch !== "") {
        return (
          mentor.Nome.norm().includes(textSearch) ||
          mentor.EXPERTISE.norm().includes(textSearch) ||
          mentor.mini_curriculo.norm().includes(textSearch)
        );
      }
      return true;
    }

    function markText(text, search) {
      var posStart = text.norm().indexOf(search.norm());
      if (posStart !== -1) {
        return (
          text.slice(0, posStart) +
          "<mark>" +
          text.slice(posStart, posStart + search.length) +
          "</mark>" +
          text.slice(posStart + search.length, text.length)
        );
      }
      return text;
    }

    function search() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;

      var contador = 0;
      var mainElem = document.querySelector("main");
      var textSearch = document.querySelector("#search").value;

      mainElem.innerHTML = "";
      mentores
        .filter(filterText)
        .sort(sortName)
        .forEach(function (mentor) {
          contador = contador + 1;
          var anchorElem = document.createElement("a");
          anchorElem.href = mentor.link;
          mainElem.appendChild(anchorElem);

          var articleElem = document.createElement("article");
          anchorElem.appendChild(articleElem);

          /* Left */
          var leftElem = document.createElement("div");
          articleElem.appendChild(leftElem);
          leftElem.classList.add("left");

          /* Avatar */
          var figureElem = document.createElement("figure");
          figureElem.style.backgroundImage = "url('" + mentor.Picture + "')";
          leftElem.appendChild(figureElem);

          

          /* Right */
          var rightElem = document.createElement("div");
          rightElem.classList.add("right");
          articleElem.appendChild(rightElem);

          var nameElem = document.createElement("h1");
          nameElem.innerHTML = markText(mentor.Nome, textSearch);
          rightElem.appendChild(nameElem);

          var titleElem = document.createElement("h3");
          titleElem.innerHTML = markText(mentor.EXPERTISE, textSearch);
          rightElem.appendChild(titleElem);

          var descriptionElem = document.createElement("p");
          descriptionElem.innerHTML = markText(mentor.mini_curriculo, textSearch);
          rightElem.appendChild(descriptionElem);
        });

      if (contador === 0) {
        mainElem.innerHTML =
          '<p class="noregister">Nenhum mentor encontrado<p>';
      }
    }

    window.onload = function () {
      mentores = data;

          search("");
      // var servidor = "http://app.spaceappsriopreto.com/b0344db4/mentores";
      // fetch(servidor)
      //   .then(function (response) {
      //     return response.json();
      //   })
      //   .then(function (content) {
      //     mentores = content;
      //     search("");
      //   });
    };
  </script>
</html>
