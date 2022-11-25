function createBook(livro, autor, clivro, genero, redhtml, cor) {
  return `
    <li class="collection-item avatar">
      <i class="material-icons circle ${cor}">book</i>
      <span class="title"> <b>Nome do Livro:</b> ${livro}</span>
      <p><b>Autor:</b> ${autor} <br>
        <b>Código do Livro:</b> ${clivro} (ISBN) <br>
        <b>Gênero:</b> ${genero}
      </p>
      <a href="${redhtml}" class="secondary-content"><i class="material-icons">live_help</i></a>
    </li>
    `
}

document.querySelector("#app").innerHTML = `

<style>
 .brand-logo{
  margin-left: 2%;
 }
 </style>
<nav>
        <div class="nav-wrapper red">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a class="brand-logo">Bibliotechno</a>
            
            <ul class="right hide-on-med-and-down">
                <li><a href="menu.html"><i class="material-icons right">menu</i>Início</a></li>
                <li><a href="cadastro2.html"><i class="material-icons right">add_to_photos</i>Cadastrar Livros</a></li>
                <li><a href="livros_pendente.html"><i class="material-icons right">collections_bookmark</i>Controle de Livros</a></li>
                <li><a href="#!"><i class="material-icons right">add_to_photos</i>Cadastrar Aluno</a></li>
                <li class="active"><a href="login.html"><i class="material-icons right">cancel</i>Sair</a></li>
            </ul>
            
    </nav>
    <ul id="slide-out" class="sidenav">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="assets/images/backgroundsidenav.png" style="height: 100%;">
      </div>
      <a href="#user"><img class="circle" src="assets/images/user.png"></a>
      <a href="#name"><span class="white-text name">Usuário</span></a>
      <a href="#admin"><span class="white-text email">@admin</span></a>
    </div>
  </li>
  <li>
    <div class="divider"></div>
  </li>
  <li><a href="#!"><i class="material-icons">book</i>Todos Os Livros</a></li>
  <li>
    <div class="divider"></div>
  </li>
  <li><a href="#!"><i class="material-icons">add_to_photos</i>Cadastrar Livros</a></li>
  <li>
    <div class="divider"></div>
  </li>
  <li><a href="#!"><i class="material-icons">collections_bookmark</i>Controle de Livros</a></li>
  <li><a class="subheader"></a></li>
  <li><a class="subheader"></a></li>
  <li><a class="subheader"></a></li>
  <li><a class="subheader"></a></li>
  <br>
  <br>
  <br>
  <br>
  <br>
  <li><a href="#!">Sair</a></li>
</ul>

  <div class="row">
    <div class="col s12">
      <div class="row-center">
        <div class="input-field col s4">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete-input" class="autocomplete" placeholder="Pesquisa">
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">view_list</i>
          <select multiple>
            <option value="" disabled selected></option>
            <option value="1">Ficção</option>
            <option value="2">Romance</option>
            <option value="3">Aventura</option>
            <option value="4">Comédia</option>
            <option value="5">Infantil</option>
            <option value="6">Antologias</option>
            <option value="7">Poesias</option>
            <option value="8">Horror</option>
            <option value="9">História</option>
          </select>
          <label></label>
        </div>
        <div class="input-field col s2">
          <i class="material-icons prefix">chevron_right</i>
          <input type="text" id="cod_livro" class="validate" placeholder="Cód. do Livro">
        </div>
      </div>
    </div>
  </div>
  <ul class="collection">
    ${createBook("Viagem ao Centro da Terra", "Jules Verne", "8537815519", "Ficção Científica", "sobre_livro.html", "red")}, ${createBook("test5", "test6", "test7", "test8", "seila", "green")}
  </ul> `
