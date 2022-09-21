<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" href="../assets/css/components.css">

    <style>
        .webcam-modal .modal-dialog {
            max-width: 95%;
            margin-left: auto;
            margin-right: auto;
        }

        .webcam-modal .controles button {
            margin-left: 10px;
            margin-bottom: 10px;
        }

        .webcam-modal .modal-header {
            font-size: 16px;
            font-weight: normal;
            border: none;
        }

        .webcam-modal .modal-body {
            padding: 0;
            margin: 0;
        }

        .webcam-modal .modal-footer {
            border: none;
        }


        @media (min-width: 992px) {
            .webcam-modal .modal-dialog {
                max-width: 60%;
            }
        }

        .webcam-video {
            width: 100%
        }

        .webcam-canvas {
            display: none;
            width: 100%
        }

        .webcam-imagem {
            width: 100%
        }
    </style>

</head>

<body>


    <!-- <input type="file" accept="image/*" capture="camera" /> -->
      <!-- <input type="file" accept="image/*" capture="camera" /> -->


    <!-- Webcam modal -->
    <div id="webcam-modal" class="modal fade webcam-modal" tabindex="-1" role="dialog" aria-labelledby="webcam-modalLabel" aria-modal="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    Capturar imagem
                    <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form id="form-cadastro_perfil" style="overflow-y: auto;">
                    <div class="modal-body">
                        <video class="webcam-video" autoplay></video>
                        <canvas class="webcam-canvas"></canvas>
                        <img class="webcam-imagem" style="display: none">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light webcam-recapturar" style="display: none">
                            Tirar outra
                        </button>
                        <button type="button" class="btn btn-light webcam-capturar">
                            Capturar
                        </button>
                        <button id="save" type="submit" class="btn btn-loader btn-primary webcam-salvar">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button class="btn btn-primary" id="cadastrar_perfil" data-toggle="modal" data-target="#webcam-modal">Abrir modal</button>





    <script src="../assets/lib/jquery/jquery-min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="webcam.js"></script>
</body>

</html>