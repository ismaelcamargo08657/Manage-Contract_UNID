<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato Digital - PROSMAN</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #e9eef3;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        .container {
            max-width: 670px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #0077c8, #00a3e0);
            padding: 40px;
            text-align: center;
            color: white;
        }

        .header img {
            width: 160px;
            margin-bottom: 12px;
        }

        .content {
            padding: 40px 35px;
            color: #333;
            font-size: 15.5px;
            line-height: 1.7;
        }

        .title-block {
            background: #f7f9fb;
            border-left: 5px solid #0077c8;
            padding: 18px 20px;
            margin-bottom: 25px;
            border-radius: 6px;
        }

        h1,
        h2,
        h3 {
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 22px;
            color: #0077c8;
            margin-bottom: 10px;
        }

        .info-box {
            background: #f1f6fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            border: 1px solid #dbe5ec;
        }

        .footer {
            background: #f4f4f4;
            padding: 25px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        strong {
            color: #0077c8;
        }
    </style>
</head>

<body>

    <div class="container">


        <div class="header">
            <img src="{{ $message->embed(public_path('img/logo.png')) }}" alt="Logo PROSMAN">
            <h2 style="font-size:26px; font-weight:500; margin-top:10px;">Contrato Digital</h2>
        </div>


        <div class="content">

            <div class="title-block">
                <h1>Saludos, estimado(a) colaborador(a).</h1>
                <p style="margin-top:8px;">
                    Te hacemos llegar tu <strong>Contrato Digital</strong>.
                    Para cualquier duda o asistencia, puedes comunicarte a través de nuestros canales oficiales,
                    incluido WhatsApp.
                </p>
            </div>

            <p>
                Gracias por utilizar la plataforma de contratación digital de <strong>Servicios e Insumos Prosman, S.A.
                    de C.V.</strong>.
                Te confirmamos que tu contrato ha sido generado correctamente y se encuentra adjunto en formato PDF.
            </p>

            <div class="info-box">
                <h3 style="font-size:18px; font-weight:600; margin-bottom:10px; color:#333;">
                    Consentimiento sobre el uso de medios digitales
                </h3>

                <p>
                    Usted otorga su consentimiento expreso para que la comunicación oficial se realice a través de
                    medios digitales como WhatsApp, correo electrónico y cualquier otro canal autorizado por Servicios e
                    Insumos Prosman, S.A. de C.V.
                </p>

                <p>
                    También acepta el uso de las plataformas digitales mencionadas en el presente contrato, las cuales
                    forman parte esencial del proceso administrativo.
                    En caso de incumplimiento o mal uso de estas herramientas, Servicios e Insumos Prosman, S.A. de C.V.
                    podrá llevar a cabo las acciones
                    correspondientes conforme a lo establecido.
                </p>
                <p>
                    Saludos cordiales.<br><br>

                </p>


            </div>

            <br><br>



        </div>

        <div class="footer">
            Este es un mensaje automatizado del sistema de contratación digital PROSMAN.<br>
            Por favor, no responda a este correo.
        </div>

    </div>

</body>

</html>
