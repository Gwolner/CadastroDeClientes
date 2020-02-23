# Cadastro de clientes

Aprendizado do CRUD PHP e do framework [Materialize](https://materializecss.com/getting-started.html) a partir do desenvolvimento de um sistema que cadastra clientes genéricos em um BD relacional (MySQL).

## Hospedagem e SGBD <img src="logo/xampp.png" width="36" height="36" align="right">

Para a hospedagem do sistema foi utilizado o servidor Apache e na criação e gestão do BD MySQL, o PHPMyAdmin, ambos pertencentes ao [XAMPP](https://www.apachefriends.org/pt_br/download.html).

## Banco de Dados <img src="logo/mysql.png" width="70" height="36" align="right">

O BD <b>crud</b> possui uma única tabela chamada <b>cliente</b>, contendo os campos <b>id, nome, sobrenome, email e telefone</b> a fim de auxiliar no aprendizado do CRUD. O script do BD foi exportado do PHPMyAdmin e pode ser encontrado no diretório [bd_mysql](https://github.com/Gwolner/crud-php-front-materialize/tree/master/bd_mysql).

## Front Materialize <img src="logo/materialize.png" width="63" height="34" align="right">

Ao acessar a aplicação, a primeira tela que se vê é de uma listagem vazia de clientes.

<img src="img/materialize1.png" width="670" height="249">

Clicando em <b>Adicionar clientes</b>, o usuário é redirecionado para uma página contendo um formulário.

<img src="img/materialize2.png" width="673" height="458">

Basta preencher os dados e clicar em <b>Cadastrar</b>.

<img src="img/materialize3.png" width="673" height="458">

Uma mensagem de confirmação surgirá, por alguns segundos, no canto direito da tela.

<img src="img/materialize4.png" width="928" height="269">

Clicando no botão laranja é possivel atualizar os dados do cliente.

<img src="img/materialize5.png" width="670" height="446">

Após atualizar os dados necessários, basta clicar em <b>Atualizar</b>. Uma mensagem de confirmação da operação surgirá por alguns segundos.

<img src="img/materialize6.png" width="933" height="266">

Clicando no botão vermelho, um modal surgirá pedindo confirmação de exclusão do cliente.

<img src="img/materialize7.png" width="773" height="275">

Confirmada a exclusão, o registro é apagado e uma mensagem é exibida por alguns segundos, confirmando a exclusão.

<img src="img/materialize8.png" width="935" height="246">

## CRUD PHP <img src="logo/php.png" width="65" height="37" align="right">

Explicar organização da estrutura do código, colocar metodos novos que aprendi e explicar pra que servem.
