<?php

// =========================
// CONFIGURACIÓN
// =========================
$para = 'sales@chemicalbroker.mx';
$recaptcha_secret = '6LemSMgsAAAAAL-5OeIYw2lU9P5IN5HwsRZ2oTnq'; // 🔴 TU SECRET KEY REAL

// =========================
// ANTISPAM (HONEYPOT)
// =========================
if (!empty($_POST["spamkill"])) {
    exit; // Bot detectado
}

// =========================
// CAPTURA SEGURA DE DATOS
// =========================
$Nombre        = htmlspecialchars($_POST["nombre"] ?? '');
$Organizacion  = htmlspecialchars($_POST["organizacion"] ?? '');
$Puesto        = htmlspecialchars($_POST["puesto"] ?? '');
$Email         = htmlspecialchars($_POST["email"] ?? '');
$Tipoempresa   = htmlspecialchars($_POST["Tipoempresa"] ?? '');
$Solicitud     = htmlspecialchars($_POST["solicitud"] ?? ''); // 🔥 NUEVO CAMPO

// =========================
// LOG INICIAL
// =========================
file_put_contents("log_envios.txt", date("Y-m-d H:i:s") . " - Intento\n", FILE_APPEND);

// =========================
// VALIDACIÓN RECAPTCHA
// =========================
$recaptcha_response = $_POST['recaptcha_response'] ?? '';
$recaptcha = null;

if (!empty($recaptcha_response)) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($response, true);
}

// =========================
// VALIDACIÓN FLEXIBLE
// =========================
$recaptcha_valido = false;

if ($recaptcha && isset($recaptcha['success']) && $recaptcha['success'] == true) {
    $recaptcha_valido = true;
}

// =========================
// ENVÍO (NO BLOQUEA SI FALLA RECAPTCHA)
// =========================
if ($recaptcha_valido || empty($recaptcha_response)) {

    // =========================
    // HEADERS
    // =========================
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Chemical Broker <it@chemicalbroker.mx>\r\n";
    $headers .= "Reply-To: $Email\r\n";

    $asunto = "Nuevo requerimiento desde sitio web";

    // =========================
    // MENSAJE HTML
    // =========================
    $mensaje = "
    <html>
    <body style='font-family:Arial;background:#f4f4f4;padding:20px;'>
    <table width='600' align='center' style='background:#fff;padding:20px;border-radius:8px;'>
        
        <tr>
            <td style='background:#0d1b2a;color:#fff;padding:15px;text-align:center;'>
                <h2>Nuevo Requerimiento</h2>
            </td>
        </tr>

        <tr>
            <td>
                <table width='100%' cellpadding='10' style='border-collapse:collapse;'>

                    <tr style='background:#f9f9f9;'>
                        <td><b>Nombre:</b></td>
                        <td>$Nombre</td>
                    </tr>

                    <tr>
                        <td><b>Empresa:</b></td>
                        <td>$Organizacion</td>
                    </tr>

                    <tr style='background:#f9f9f9;'>
                        <td><b>Puesto:</b></td>
                        <td>$Puesto</td>
                    </tr>

                    <tr>
                        <td><b>Email:</b></td>
                        <td>$Email</td>
                    </tr>

                    <tr style='background:#f9f9f9;'>
                        <td><b>Tipo de empresa:</b></td>
                        <td>$Tipoempresa</td>
                    </tr>

                    <tr>
                        <td><b>Solicitud:</b></td>
                        <td>$Solicitud</td>
                    </tr>

                </table>

                <br>

                <div style='text-align:center;'>
                    <a href='mailto:$Email' 
                       style='background:#007bff;color:#fff;padding:10px 20px;text-decoration:none;border-radius:5px;'>
                       Responder cliente
                    </a>
                </div>

            </td>
        </tr>

        <tr>
            <td style='background:#f1f1f1;text-align:center;padding:10px;font-size:12px;color:#777;'>
                Mensaje generado automáticamente desde ChemicalBroker.mx
            </td>
        </tr>

    </table>
    </body>
    </html>
    ";

    // =========================
    // ENVÍO
    // =========================
    if (mail($para, $asunto, $mensaje, $headers)) {

        file_put_contents("log_envios.txt", "OK\n", FILE_APPEND);
        header("Location: Contact.php?status=ok");

    } else {

        file_put_contents("log_envios.txt", "ERROR_MAIL\n", FILE_APPEND);
        header("Location: Contact.php?status=error_mail");

    }

} else {

    file_put_contents("log_envios.txt", "SPAM\n", FILE_APPEND);
    header("Location: Contact.php?status=spam");

}

exit;
?>