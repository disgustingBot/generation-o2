<?php

$message = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
  <meta charset='utf-8'> <!-- utf-8 works for most cases -->
  <meta name='viewport' content='width=device-width'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
  <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
  <meta name='format-detection' content='telephone=no,address=no,email=no,date=no,url=no'> <!-- Tell iOS not to automatically link certain text strings. -->
  <meta name='color-scheme' content='light'>
  <meta name='supported-color-schemes' content='light'>
  <title>¡Súmate a Generación o2!</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

  <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
  <!--[if gte mso 9]>
  <xml>
  <o:OfficeDocumentSettings>
  <o:AllowPNG/>
  <o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->

<!-- Web Font / @font-face : BEGIN -->
<!-- NOTE: If web fonts are not required, lines 23 - 41 can be safely removed. -->

<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
<!--[if mso]>
<style>
* {
font-family: sans-serif !important;
}
</style>
<![endif]-->


<!-- Web Font / @font-face : END -->

<!-- CSS Reset : BEGIN -->
<style>

/* What it does: Tells the email client that only light styles are provided but the client can transform them to dark. A duplicate of meta color-scheme meta tag above. */
:root {
  color-scheme: light;
  supported-color-schemes: light;
}

/* What it does: Remove spaces around the email design added by some email clients. */
/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
}

/* What it does: Stops email clients resizing small text. */
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*='margin: 16px 0'] {
  margin: 0 !important;
}

/* What it does: forces Samsung Android mail clients to use the entire viewport */
#MessageViewBody, #MessageWebViewDiv{
  width: 100% !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
  mso-table-lspace: 0pt !important;
  mso-table-rspace: 0pt !important;
}

/* What it does: Replaces default bold style. */
th {
  font-weight: normal;
}

/* What it does: Fixes webkit padding issue. */
table {
  border-spacing: 0 !important;
  border-collapse: collapse !important;
  table-layout: fixed !important;
  margin: 0 auto !important;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
  text-decoration: none;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
  -ms-interpolation-mode:bicubic;
}

/* What it does: A work-around for email clients meddling in triggered links. */
a[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links a,
.aBn {
  border-bottom: 0 !important;
  cursor: default !important;
  color: inherit !important;
  text-decoration: none !important;
  font-size: inherit !important;
  font-family: inherit !important;
  font-weight: inherit !important;
  line-height: inherit !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
  color: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
  display: none !important;
  opacity: 0.01 !important;
}
img.g-img + div {
  display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
  u ~ div .email-container {
    min-width: 320px !important;
  }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
  u ~ div .email-container {
    min-width: 375px !important;
  }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
  u ~ div .email-container {
    min-width: 414px !important;
  }
}

</style>
<!-- CSS Reset : END -->

<!-- Progressive Enhancements : BEGIN -->
<style>

/* What it does: Hover styles for buttons */
.button-td,
.button-a {
  transition: all 100ms ease-in;
}
.button-td-primary:hover,
.button-a-primary:hover {
  background: #555555 !important;
  border-color: #555555 !important;
}

/* Media Queries */
@media screen and (max-width: 600px) {

  .email-container {
    width: 100% !important;
    margin: auto !important;
  }

  /* What it does: Forces table cells into full-width rows. */
  .stack-column,
  .stack-column-center {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    direction: ltr !important;
  }
  /* And center justify these ones. */
  .stack-column-center {
    text-align: center !important;
  }

  /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
  .center-on-narrow {
    text-align: center !important;
    display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    float: none !important;
  }
  table.center-on-narrow {
    display: inline-block !important;
  }

  /* What it does: Adjust typography on small screens to improve readability */
  .email-container p {
    font-size: 17px !important;
  }
}

</style>
<!-- Progressive Enhancements : END -->

</head>
<!--
The email background color (#222222) is defined in three places:
1. body tag: for most email clients
2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
3. mso conditional: For Windows 10 Mail
-->
<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f5f5;'>
  <center role='article' aria-roledescription='email' lang='en' style='width: 100%; background-color: #f5f5f5;'>
    <!--[if mso | IE]>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' style='background-color: #222222;'>
    <tr>
    <td>
    <![endif]-->

    <!-- Visually Hidden Preheader Text : BEGIN -->
    <div style='max-height:0; overflow:hidden; mso-hide:all;' aria-hidden='true'>
      (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email body.
    </div>
    <!-- Visually Hidden Preheader Text : END -->

    <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
    <!-- Preview Text Spacing Hack : BEGIN -->
    <div style='display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <!-- Preview Text Spacing Hack : END -->

    <!-- Email Body : BEGIN -->
    <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' style='margin: auto;' class='email-container'>
      <!-- Email Header : BEGIN -->


      <!-- Hero Image, Flush : BEGIN -->
      <tr>
        <td style='background-color: #ffffff;'>
          <img src='https://generacion-o2.org/wp-content/uploads/2020/09/header_mail_1-scaled.jpg' width='600' height='' alt='alt_text' border='0' style='width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;' class='g-img'>
        </td>
      </tr>

      <!-- Email Header : END -->


      <!-- 1 Column Text + Button : BEGIN -->
      <tr>
        <td style='background-color: #ffffff;'>
          <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
            <tr>
              <td style='padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;'>
                <h1 style='margin: 0 0 10px; font-size: 25px; line-height: 30px; color: #333333; font-weight: bold; text-align: center;'>BIENVENIDO/A</h1>
                <p style='margin: 0 0 10px;'>Muchas gracias por querer formar parte de esta ONG. Para finalizar el proceso de voluntario tienes que pasar por nuestra oficina situada en Carrer de la Diputació 211 - despacho 24 y firmar el contrato de voluntario que entre otras cosas te protege con un seguro de responsabilidad civil en el caso de estar presente en un evento.
                <br>
                <br>
                Si te has inscrito como socio del club Go2 puedes pasar por nuestras oficinas o firmar aquí mismo el documento SEPA y enviarlo a socios@generacion-o2.org cada gesto cuenta y gracias a tu aportación podemos seguir adelante. </p>
                <p style='margin: 0 0 10px;'>Aquí puedes ver el documento.</p>
                </td>
              </tr>
              <tr>
                <td style='padding: 0 20px 20px;'>
                  <!-- Button : BEGIN -->
                  <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' style='margin: auto;'>
                    <tr>
                      <td class='button-td button-td-primary' style='border-radius: 4px; background: #222222;'>
                        <a download class='button-a button-a-primary' href='https://generacion-o2.org/downloads/SEPA_CLUB_GO2_EN_BLANCO_EDITABLE.pdf' target='_blank' style='background: #90b73b; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;'>VER DOCUMENTO</a>
                      </td>
                    </tr>
                  </table>
                  <!-- Button : END -->
                </td>
              </tr>

            </table>
          </td>
        </tr>
        <!-- 1 Column Text + Button : END -->


    <!-- Clear Spacer : BEGIN -->
    <tr>
      <td aria-hidden='true' height='40' style='font-size: 0px; line-height: 0px;'>
        &nbsp;
      </td>
    </tr>
    <!-- Clear Spacer : END -->


    <!-- 1 Column Text : BEGIN -->
    <tr>
      <td style='background-color: #ffffff;'>
        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
          <tr>
            <td align='left' style='Margin:0;padding-bottom:15px;padding-top:20px;padding-left:20px;padding-right:20px'>
              <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                <tbody><tr style='border-collapse:collapse'>
                  <td valign='top' align='center' style='padding:0;Margin:0;width:560px'>
                    <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                      <tbody><tr style='border-collapse:collapse'>
                        <td class='es-infoblock es-m-p0' align='center' style='padding:0;Margin:0;padding-bottom:15px;line-height:0px;font-size:0px;color:#CCCCCC'>
                          <table class='es-table-not-adapt es-social' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                            <tbody><tr style='border-collapse:collapse'>
                              <td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'>
                                <a target='_blank' href='https://www.facebook.com/generacion.o2.barcelona/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \"helvetica neue\", helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#CCCCCC'>
                                  <img title='Facebook' src='https://generacion-o2.org/wp-content/uploads/2020/09/facebook_mail_1.png' alt='Enlace a Facebook' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'>
                                </a>
                              </td>
                              <td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'>
                                <a target='_blank' href='https://twitter.com/generaciono2?lang=es' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \"helvetica neue\", helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#CCCCCC'>
                                  <img title='Twitter' src='https://generacion-o2.org/wp-content/uploads/2020/09/twitter_mail_1.png' alt='Enlace a Linkedin' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'>
                                </a>
                              </td>
                              <td valign='top' align='center' style='padding:0;Margin:0'>
                                <a target='_blank' href='https://www.instagram.com/generacion_o2/?hl=es' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \"helvetica neue\", helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#CCCCCC'>
                                  <img title='Instagram' src='https://generacion-o2.org/wp-content/uploads/2020/09/instagram_mail_1.png' alt='Enlace a Instagram' width='32' height='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody></table></td>
                </tr>
              </tbody></table></td>
            </tr>
          </table>
        </td>
      </tr>

          <!-- 1 Column Text : END -->

    <!-- 1 Column Text : END -->

  </table>
  <!-- Email Body : END -->


  <!-- Full Bleed Background Section : BEGIN -->
  <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='background-color: #709f2b;'>
    <tr>
      <td>
        <div align='center' style='max-width: 600px; margin: auto;' class='email-container'>
          <!--[if mso]>
          <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='600' align='center'>
          <tr>
          <td>
          <![endif]-->
          <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
            <tr>
              <td style='padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: white; font-weight: bold;'>
                Atentamente: Sebastián Ferragut,
                <br>
                <br>
              Presidente
              </td>
            </tr>
          </table>
          <!--[if mso]>
        </td>
      </tr>
    </table>
    <![endif]-->
  </div>
</td>
</tr>
</table>
<!-- Full Bleed Background Section : END -->

<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->
</center>
</body>
</html>";
?>