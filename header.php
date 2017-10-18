<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= get_bloginfo("name") ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>
    <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-light navbar-light">
    <div class="container">
                <a class="navbar-brand" href="<?= get_site_url();?>" >
                    <img src="<?= wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" />
                </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/anypage">Any Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gallary">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/table">Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <input class="form-control mr-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <!--NavBar end-->