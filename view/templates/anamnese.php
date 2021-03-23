<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Tele Saúde</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Anamnese</h3>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <label><h2>Idade:</h2></label>
                                    <input name="idade" type="number" class="input is-large" placeholder="Idade" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label><h2>Peso:</h2></label>
                                    <input name="peso" type="number" class="input is-large" placeholder="Peso Kg">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label><h2>Altura:</h2></label>
                                    <input name="altura" type="number" class="input is-large" placeholder="Altura">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label><h2>Possui doença crônica? Se sim, qual?</h2></label>
                                    <input name="cronica" class="input is-large" type="text" placeholder="Possui doença crônica?">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label><h2>Se faz uso de algum medicamento continiuo,se sim qual?</h2></label>
                                    <input name="medicamento" class="input is-large" type="text" placeholder="Se faz uso de algum medicamento continiuo?">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>