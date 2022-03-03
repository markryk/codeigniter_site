<?php $this->load->view('header'); ?>

<div id="content">
    <figure class="figure align-content-center">
        <img style="width: 200px;" src="<?php echo base_url('assets/img/logo_ci.png') ?>" class="figure-img img-fluid rounded" alt="...">
        <!--<figcaption class="figure-caption">A caption for the above image.</figcaption>-->
    </figure>
 <!-- Page Items -->
 <div class="pageitem">
  <h2>Paragraphs, Links, and a Blockquote</h2>
  <p class="sub">Sed sed neque sed quam aliquet mattis.</p>
  <p>O Codelgniter é um poderoso framework PHP dentre diversos outros já existentes. Criado para desenvolvedores que precisam de um conjunto de ferramentas simples para a criação de aplicativos web completos, o CodeIgniter é uma excelente alternativa para o desenvolvimento de projetos utilizando o PHP.

    Tendo sua primeira versão pública lançada em 2006, o CodeIgniter é um excelente framework para desenvolvimento de aplicações PHP que exijam mais rapidez em seu desenvolvimento. </p>

  <blockquote>Suspendisse egestas luctus gravida. Nulla consectetur sed quam vitae dignissim. Etiam fringilla nisl lectus, sit amet faucibus lacus sagittis vel. Integer cursus velit a est elementum auctor. Cras ut felis a orci gravida pulvinar nec non tortor. Lorem
   ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis porta nulla. Proin a nunc quis lacus eleifend tincidunt laoreet nec erat. Cras augue odio, cursus eget dui nec, ullamcorper viverra quam.</blockquote>
  <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan nisi. Nullam et est vehicula, posuere massa
   a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet, suscipit tortor ac, ultricies magna.</p>
 </div>

 <section id="services" class="bg-gradient services-section">
  <div class="container">
    <header class="text-center m-5">
      <h2 data-animate="fadeInDown" class="title"> Tecnologias utilizadas </h2>
    </header>
    <div class="row services text-center">
      <div data-animate="fadeInUp" class="col-lg-3">
        <div class="icon"><i class="fab fa-html5"></i></div>
        <h3 class="heading mb-3 text-400"> HTML 5 </h3>
        <p class="text-left description"> HTML stands for Hyper Text Markup Language; is the standard markup language for creating Web pages; describes the structure of a Web page; HTML elements tell the browser how to display the content; HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc. </p>
      </div>
      <div data-animate="fadeInUp" class="col-lg-3">
        <div class="icon"><i class="fab fa-css3"></i></div>
        <h3 class="heading mb-3 text-400"> CSS 3 </h3>
        <p class="text-left description"> CSS stands for Cascading Style Sheets; CSS describes how HTML elements are to be displayed on screen, paper, or in other media; it can control the layout of multiple web pages all at once; external stylesheets are stored in CSS files </p>
      </div>
      <div data-animate="fadeInUp" class="col-lg-3">
        <div class="icon"><i class="fab fa-js-square"></i></div>
        <h3 class="heading mb-3 text-400"> JavaScript </h3>
        <p class="text-left description"> JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. JavaScript is a prototype-based, multi-paradigm, single-threaded, dynamic language, supporting object-oriented, imperative, and declarative (e.g. functional programming) styles. </p>
      </div>
      <div data-animate="fadeInUp" class="col-lg-3">
        <div class="icon"><i class="fab fa-php"></i></div>
        <h3 class="heading mb-3 text-400"> PHP </h3>
        <p class="text-left description"> PHP is an acronym for "PHP: Hypertext Preprocessor"; is widely-used, open source scripting language; Its scripts are executed on the server and is free to download and use </p>
      </div>
    </div>
    <!--<hr data-animate="fadeInUp">
    <div data-animate="fadeInUp" class="text-center">
      <p class="lead">Would you like to know more or just discuss something?</p>
      <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact me</a></p>
    </div>-->
  </div>
</section>

 <div class="pageitem">
  <h2>Ordered and Unordered Lists</h2>
  <p class="sub">Lists in two columns</p>
  <div class="two-col-cell">
   <h3>Ordered List</h3>
   <ol>
    <li>First in the list</li>
    <li>Second one goes here</li>
    <li>Third item on the list</li>
    <li>Fourth item here</li>
    <li>Fifth and some more to go</li>
    <li>Sixth, just because</li>
    <li>Seventh item</li>
    <li>Eighth and nearing the end </li>
    <li>Ninth and one more to go</li>
    <li>Tenth and last</li>
   </ol>
  </div>
  <div class="two-col-cell">
   <h3>Unordered List</h3>
   <ul>
    <li>Nulla consectetur</li>
    <li>Integer in accumsan nisi</li>
    <li>Cras augue odio</li>
    <li>Aliquam lacinia rutrum</li>
    <li>Vestibulum placerat sapien</li>
    <li>Pellentesque eleifend</li>
    <li>Etiam fringilla nisl lectus</li>
    <li>Proin eleifend sapie</li>
    <li>Maecenas placerat</li>
    <li>Praesent ut purus fri</li>
   </ul>
  </div>
 </div>
 <div class="pageitem">
  <h2>Simple Gallery</h2>
  <p class="sub">Images in three columns and unlimited rows.
   <p>Morbi aliquet elit quis viverra lobortis. Mauris ullamcorper neque eget mollis pretium. Cras lacinia dolor a laoreet porta. Aliquam bibendum mattis elit nec tincidunt. Curabitur efficitur sed mauris eget venenatis.</p>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/animals"><br><span class="sub">Random animal by PlaceIMG</span>
   </div>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/arch"><br><span class="sub">Random architecture by PlaceIMG</span>
   </div>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/nature"><br><span class="sub">Random nature by PlaceIMG</span>
   </div>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/people"><br><span class="sub">Random people by PlaceIMG</span>
   </div>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/tech"><br><span class="sub">Random technology by PlaceIMG</span>
   </div>
   <div class="three-col-cell gallery">
    <img src="http://placeimg.com/300/200/any"><br><span class="sub">Random image by PlaceIMG</span>
   </div>
 </div>
 <!-- // -->
</div>

<?php $this->load->view('footer'); ?>