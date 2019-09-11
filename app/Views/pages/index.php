<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FAIL - SALES</title>
        <link rel="stylesheet" href="asets/themes/asdz.css" />
        <link rel="stylesheet" href="asets/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="asets/js/index.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
    <section id="home" data-role="page">
        <header data-role="header"><h1>FAIL - HOME</h1></header>
        <div class="content">
            <div class="narrow">
                <h1>WELCOME TO FAIL!</h1>
                <h4>App to waste of time with JQuery Mobile</h4>
            </div>
        </div>
        <center>
            <footer data-role="footer">
                <a href="#page1" class="mdc-icon-button material-icons center pull-right">arrow_forward_ios</a>
            </footer>
        </center>
    </section>
    <section id="page1" data-role="page" >
        <header data-role="header"><h1>FAIL - SALES</h1></header>
        <div class="content" data-role="content">
            <div data-role="content">
                <form>
                    <div class="row">
                        <label for="txtcliente">Cliente</label>
                        <input class="form-group" type="text" name="cliente" id="txtcliente">
                    </div>
                    <div class="row">
                        <label for="txtPrecio">Precio</label>
                        <input class="form-group" type="number" name="precio" id="txtPrecio">
                    </div>
                    <div class="row">
                        <label for="txtComprador">Producto</label>
                        <select id="cmbProducto">
                            <option>Seleccione</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="txtCantidad">Cantidad</label>
                        <input class="form-group" type="number" name="cantidad" id="txtCantidad">
                    </div>
                    <fieldset class="ui-grid-a">
                        <div class="ui-block-a">
                            <input type="button" value="Guardar" data-theme="a" id="btnSave" onclick="saveVenta()">
                        </div>
                        <div class="ui-block-b">
                            <input type="reset" value="Cancelar" data-theme="b">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <center>
            <footer data-role="footer">
                <a href="#home" class="mdc-icon-button material-icons center">home_work</a>
                <a href="#page2" class="mdc-icon-button material-icons center">arrow_forward_ios</a>
            </footer>
        </center>
    </section>
    <section id="page2" data-role="page">
        <header data-role="header">
            <h1>FAIL - PROVIDERS</h1>
        </header>
        <div class="content" data-role="content">
            <form action="" method="post">
                <div class="row">
                    <label for="txtNit">Nit</label>
                    <input class="form-group" type="text" name="nit" id="txtNit">
                </div>
                <div class="row">
                    <label for="txtNombre">Nombre</label>
                    <input class="form-group" type="text" name="nombre" id="txtNombre">
                </div>
                <fieldset class="ui-grid-a">
                    <div class="ui-block-a">
                        <input type="submit" value="Guardar" data-theme="a">
                    </div>
                    <div class="ui-block-b">
                        <input type="reset" value="Cancelar" data-theme="b">
                    </div>
                </fieldset>
            </form>
        </div>
        <center>
            <footer data-role="footer">
                <a href="#home" class="mdc-icon-button material-icons center">home_work</a>
                <a href="#page1" class="mdc-icon-button material-icons center">arrow_back_ios</a>
            </footer>
        </center>
    </section>
    </body>
</html>