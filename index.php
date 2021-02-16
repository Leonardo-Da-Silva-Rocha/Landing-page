
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Web Marketing</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </nav>
  <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><?php echo htmlentities('<');?> Web Marketing <?php echo htmlentities('>');?></h2>
            <p>Empresa voltada para desenvolvimento web e marketing digital</p>
            <a href="">Saiba Mais</a>
          </div><!--col-md-6-->
        </div><!--row-->
      </div><!--container-->
    </section>

    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h2>Entre em nossa lista!</h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome"><button type="submit">Submit</button>
            </form>
          </div>
        </div><!--row-->
      </div><!--container-->
    </section>

    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus. Vivamus luctus convallis est, a lobortis lacus tincidunt condimentum. Vivamus vitae neque eu ante molestie maximus. Nullam quis sem diam. Ut eget congue nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </blockquote>
          </div>
        </div><!--row-->
      </div><!--container-->
    </section><!--depoimento-->

    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa!</h2>
      <div class="container diferenciais-container">
        <div class="row">
          
          <div class="col-md-4">
           <h3>Diferencial #1</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus. Vivamus luctus convallis est, a lobortis lacus tincidunt condimentum. Vivamus vitae neque eu ante molestie maximus. Nullam quis sem diam. Ut eget congue nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>

          <div class="col-md-4">
           <h3>Diferencial #2</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus. Vivamus luctus convallis est, a lobortis lacus tincidunt condimentum. Vivamus vitae neque eu ante molestie maximus. Nullam quis sem diam. Ut eget congue nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>

          <div class="col-md-4">
           <h3>Diferencial #3</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus. Vivamus luctus convallis est, a lobortis lacus tincidunt condimentum. Vivamus vitae neque  eu ante molestie maximus. Nullam quis sem diam. Ut eget congue nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>

          
        </div><!--row-->
      </div><!--container-->
    </section><!--diferenciais-->


    <section class="equipe text-center">
      <h2>Equipe</h2>
      <div class="container equipe-container">

        <div class="row">

          <div class="col-md-6">
            <div class="equipe-single text-center">
              <div class="row">
                <div class="col-md-12">
                  <div class="user-picture"></div>
                  <div class="col-md-12 text-center">
                    <h3>Marcos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-12">
                  <div class="user-picture2"></div>
                  <div class="col-md-12 text-center">
                    <h3>Leandro</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-12">
                  <div class="user-picture3"></div>
                  <div class="col-md-12 text-center">
                    <h3>Maiara</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-12">
                  <div class="user-picture4"></div>
                  <div class="col-md-12 text-center">
                    <h3>Suzi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio risus, gravida ac nisl in, gravida dictum erat. Aenean porttitor metus nunc, sit amet porttitor ante placerat quis. Aliquam ut ultricies nunc. Proin at arcu in elit accumsan lacinia ut vitae tellus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--row-->
      </div><!--equipe-container-->
    </section><!--equipe-->


    <section class="final-site">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <h2>Fale conosco</h2>
            <form action="/action_page.php">
            
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="nome">
            </div>

            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>


            <div class="form-group">
              <label for="msg">Menssagem:</label>
              <textarea class="form-control"></textarea>
             
            </div>
           
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </div>

          <div class="col-md-6">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Plano Semanal</th>
                  <th>Plano Díario</th>
                  <th>Plano Anual</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>

                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>

                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>
      </div>
    </section><!--final-site-->

    <footer class="text-center">
      <p>Todos os direitos reservados</p>
    </footer><!--footer-->

  </div><!--box-->
  </body>
</html>