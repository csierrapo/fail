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
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
    <section id="home" data-role="page">
        <header data-role="header"><h1>Home</h1></header>
        <h1>Hola Mundo!</h1>
        <footer data-role="footer">
            <a href="#page1" class="mdc-icon-button material-icons center pull-right">arrow_forward_ios</a>
        </footer>
    </section>
    <section id="page1" data-role="page" >
        <header data-role="header"><h1>Captura de Ventas</h1></header>
        <div class="content" data-role="content">
            <div data-role="content">
                <form method="post" action="venta">
                    <div class="row">
                        <label for="">Para</label>
                        <input class="form-group" type="text" name="cliente" id="txtPara">
                    </div>
                    <div class="row">
                        <label>Precio</label>
                        <input class="form-group" type="number" name="precio" id="txtPrecio">
                    </div>
                    <div class="row">
                        <label>Comprador</label>
                        <input class="form-group" type="text" name="comprador" id="txtComprador">
                    </div>
                    <div class="row">
                        <label>Cantidad</label>
                        <input class="form-group" type="number" name="cantidad" id="txtCantidad">
                    </div>
                    <button class="mdc-icon-button material-icons" type="submit">save</button>
                </form>
            </div>
        </div>
        <footer data-role="footer">
            <a href="#home" class="mdc-icon-button material-icons center">home_work</a>
            <a href="#page2" class="mdc-icon-button material-icons center">arrow_forward_ios</a>
        </footer>
    </section>
    <section id="page2" data-role="page">
        <header data-role="header">
            <h1>Captura Compradores</h1>
        </header>
        <div class="content" data-role="content">
            <div class="row">
                <label>Nit</label>
                <input class="form-group" type="text" name="" value="">
            </div>
            <div class="row">
                <label>Nombre</label>
                <input class="form-group" type="text" name="" value="">
            </div>
        </div>
        <footer data-role="footer">
            <a href="#home" class="mdc-icon-button material-icons center">home_work</a>
            <a href="#page1" class="mdc-icon-button material-icons center">arrow_back_ios</a>
        </footer>
    </section>

    <section id="page3" data-role="page">
        <header data-role="header"><h1>jQuery Mobile</h1></header>
        <div class="content" data-role="content">
            <p>Segunda pagina!</p>
            <a href="#page1">Volver</a>
        </div>
        <footer data-role="footer"><h1>Facultad de ingenieria</h1></footer>
    </section>

    <section id="page4" data-role="page">
        <header data-role="header"><h1>jQuery Mobile</h1></header>
        <div class="content" data-role="content">
            <p>Segunda pagina!</p>
            <a href="#page1">Volver</a>
        </div>
        <footer data-role="footer"><h1>Facultad de ingenieria</h1></footer>
    </section>

    <section id="page5" data-role="page">
        <header data-role="header"><h1>jQuery Mobile</h1></header>
        <div class="content" data-role="content">
            <p>Segunda pagina!</p>
            <a href="#page1">Volver</a>
        </div>
        <footer data-role="footer"><h1>Facultad de ingenieria</h1></footer>
    </section>
    </body>
</html>
