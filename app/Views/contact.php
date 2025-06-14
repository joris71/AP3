<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe Senior 1</title>
</head>
<body>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href=<?php echo base_url('/'); ?>>Acceuil</a></li>
        <li class="active">Contact</li>
    </ol>

    <div class="row">
        
        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Contact us</h1>
            </header>
            
            <p>
                We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
            </p>
            <br>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
                        </div>
                        <div class="col-sm-6 text-right">
                            <input class="btn btn-action" type="submit" value="Send message">
                        </div>
                    </div>
                </form>

        </article>
        <!-- /Article -->
        
        <!-- Sidebar -->

    </div>
</div>	<!-- /container -->


</body>
</html>