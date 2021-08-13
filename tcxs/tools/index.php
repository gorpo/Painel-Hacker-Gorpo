<?php
// Inicia a sessão
session_start();

include('../../verifica_login.php');


//if ( $_SESSION['logado'] === true ) {
    // Aqui vem a parte para usuários logados
//  header('Location: /pannel/tcxs/tools/index.html');
//}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from Manicomio/tools/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 08:12:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Pannel Manicomio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="minimum-scale=1.0, width=device-width" name="viewport">
    <meta name="author" content="Manicomio">
    <meta name="owner" content="Manicomio">
    <meta name="copyright" content="Copyright 2019">
    <meta name="robots" content="yesindex">
    <meta itemprop="name" content="CC Checker - Credit Card Checker - Manicomio">
    <meta itemprop="description" content="CC Checker - Credit Card Checker - Manicomio">
    <meta property="og:site_name" content="Manicomio" />
    <meta property="og:title" content="CC Checker - Credit Card Checker - Manicomio" />
    <meta property="og:description" content="CC Checker - Credit Card Checker - Manicomio" />
    <meta property="og:url" content="index.html">
    <link rel="canonical" href="index.html">
    <link href="../fonts/font-awesome/css/all.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navigation.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/noscript.css" rel="stylesheet">
    <link href="https://i.imgur.com/QkhKfNY.png" rel="icon" type="image/x-icon">
    <script src="../js/jquery.js" type="837f6266063cc68212cc66bf-text/javascript"></script>
    <script src="../js/bootstrap.min.js" defer type="837f6266063cc68212cc66bf-text/javascript"></script>
    <script src="../js/xavier.js" defer type="837f6266063cc68212cc66bf-text/javascript"></script>
    <script src="../js/jquery.metisMenu.js" defer type="837f6266063cc68212cc66bf-text/javascript"></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://Manicomio/tools/",
                    "name": "Tools Hacker"
                }
            }]
        }

    </script>
    <script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt" type="837f6266063cc68212cc66bf-text/javascript"></script>
</head>

<body>
    <div id="page-wrapper">
        <nav id="side-menu" class="navbar-default navbar-static-side">
            <div id="sidebar-collapse">
               <div id="sidebar-collapse"><div id="logo-element"><a class="logo" href="index.html" title="Manicomio"><img src="https://i.imgur.com/QkhKfNY.png" alt="Manicomio"><span class="x-hidden"></span><span class="logo-full"> </span></a></div>
                <ul class="nav">
                    <li><a href="index.html" title="Manicomio"><i class="fal fa-tools"></i> <span class="nav-label">Tools Hacker</span></a></li>
                    <li><a href="#"><i class="fal fa-user"></i> <span class="nav-label">Phishing</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="phishing/bb/index.html">Banco do Brasil</a></li>
                           <li><a href="phishing/bbrad/index.php">Banco Bradesco</a></li> <li><a href="phishing/caixa/index.html">Banco Caixa EF</a></li> <li><a href="phishing/cielo/index.php">Banco Cielo</a></li> <li><a href="phishing/ml/index.html">Mercado Livre</a></li> <li><a href="phishing/mp/index.html">Mercado Pago</a></li> <li><a href="phishing/uol/index.php">Pagseguro UOL</a></li> <li><a href="phishing/paypal/index.html">PayPal</a></li> <li><a href="phishing/ubber/index.html">Ubber</a></li> <li><a href="phishing/visa/index.php">Visa</a></li> <li><a href="phishing/facebook/index.php">Facebook</a> </li><li><a href="phishing/netflix/index.html">Netflix</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-search-plus"></i> <span class="nav-label">Checkers</span><span class="fal fa-angle-double-right"></span></a>



                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="cc-checker.html">CC Checker</a></li>
                            <li><a href="credit-card-bin-checker.html">Credit Card Bin</a></li>
                            <li><a href="spotify-account-checker.html">Spotify Account</a></li>
                            <li><a href="tc-number-checker.html">TC Number</a></li>
                            <li><a href="chk_amaro.html">Amaro</a></li>
                            <li><a href="chk_ame-digital.html">AME Digital</a></li>
                            <li><a href="chk_americanas.html">Americanas</a></li>
                            <li><a href="chk_bol-mail.html">Bol Mail</a></li>
                            <li><a href="chk_cabify.html">Cabify</a></li>
                            <li><a href="chk_casasbahia.html">Casas Bahia</a></li>
                            <li><a href="chk_cea.html">C&A</a></li>
                            <li><a href="chk_centauro.html">Centauro</a></li>
                            <li><a href="chk_colombo.html">Colombo</a></li>
                            <li><a href="chk_ebanx.html">EBanx</a></li>
                            <li><a href="chk_elo-7.html">Elo 7</a></li>
                            <li><a href="chk_gearbest.html">Gear Best</a></li>
                            <li><a href="chk_globomail.html">Globo Mail</a></li>
                            <li><a href="chk_igmail.html">IG Mail</a></li>
                            <li><a href="chk_ingresso.html">Ingresso</a></li>
                            <li><a href="chk_kabum.html">Kabum</a></li>
                            <li><a href="chk_kanui.html">Kanui</a></li>
                            <li><a href="chk_magazine.html">Magazine Luiza</a></li>
                            <li><a href="chk_netshoes.html">Netshoes</a></li>
                            <li><a href="chk_nui.html">Nui</a></li>
                            <li><a href="chk_oi-mail.html">Oi Mail</a></li>
                            <li><a href="chk_pagseguro.html">Pagseguro UOL</a></li>
                            <li><a href="chk_peixe-urbano.html">Peixe Urbano</a></li>
                            <li><a href="chk_pernambucanas.html">Pernambucanas</a></li>
                            <li><a href="chk_.html"></a></li>

                        </ul>





                    </li>
                    <li><a href="#"><i class="fal fa-star"></i> <span class="nav-label">Generators</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="credit-card-generator.html">Credit Card</a></li><li><a href="chk_geradorcc-2020.html">Gerador CC 2020</a></li>
                           
                            <li><a href="password-generator.html">Password</a></li>
                            <li><a href="sitemap-generator.html">Sitemap</a></li>
                            <li><a href="tc-number-generator.html">TC Number</a></li>
                            <li><a href="tc-tax-number-generator.html">TC Tax Number</a></li>
                            <li><a href="sin-number-generator.html">SIN Number</a></li>
                            <li><a href="ssn-number-generator.html">SSN Number</a></li>
                            <li><a href="uk-nino-number-generator.html">UK NINO Number</a></li>
                            <li><a href="qr-code-generator.html">QR Code</a></li>
                          
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-check"></i> <span class="nav-label">Validators</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="credit-card-validator.html">Credit Card</a></li>
                            <li><a href="aba-routing-number-validator.html">ABA & Routing</a></li>
                            <li><a href="tc-number-validator.html">TC Number</a></li>
                            <li><a href="tc-tax-number-validator.html">TC Tax Number</a></li>
                            <li><a href="sin-number-validator.html">SIN Number</a></li>
                            <li><a href="ssn-number-validator.html">SSN Number</a></li>
                            <li><a href="uk-nino-number-validator.html">UK NINO Number</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#"><i class="fal fa-lock"></i> <span class="nav-label">Encoders</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="md5-encoder.html">MD5</a></li>
                            <li><a href="sha-encoder.html">SHA</a></li>
                            <li><a href="base64-encoder.html">BASE64</a></li>
                            <li><a href="crc-encoder.html">CRC</a></li>
                            <li><a href="crypt-encoder.html">Crypt</a></li>
                            <li><a href="str-rot13-encoder.html">Str Rot13</a></li>
                            <li><a href="strrev-encoder.html">Str Rev</a></li>
                            <li><a href="convert-uu-encoder.html">Convert UU</a></li>
                            <li><a href="phishing/bb/index.html">Bin2Hex</a></li>
                            <li><a href="utf8-encoder.html">UTF8</a></li>
                            <li><a href="urlencode.html">Url</a></li>
                            <li><a href="rawurlencode.html">Raw Url</a></li>
                            <li><a href="base64-image-encoder.html">BASE64 Image</a></li>
                            <li><a href="html-escape-encoder.html">HTML Escape</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-lock-open"></i> <span class="nav-label">Decoders</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="base64-decoder.html">BASE64</a></li>
                            <li><a href="str-rot13-decoder.html">Str Rot13</a></li>
                            <li><a href="strrev-decoder.html">Str Rev</a></li>
                            <li><a href="convert-uu-decoder.html">Convert UU</a></li>
                            <li><a href="hex2bin.html">Hex2Bin</a></li>
                            <li><a href="utf8-decoder.html">UTF8</a></li>
                            <li><a href="html-unescape-decoder.html">HTML Unescape</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#"><i class="fal fa-code"></i> <span class="nav-label">Beautifiers</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="credit-card-beautifier.html">Credit Card</a></li>
                            <li><a href="c-code-beautifier.html">C</a></li>
                            <li><a href="php-code-beautifier.html">PHP</a></li>
                            <li><a href="html-code-beautifier.html">HTML</a></li>
                            <li><a href="css-code-beautifier.html">CSS</a></li>
                            <li><a href="javascript-code-beautifier.html">JS</a></li>
                            <li><a href="json-beautifier.html">JSON</a></li>
                            <li><a href="xml-beautifier.html">XML</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-code"></i> <span class="nav-label">Minifiers</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="html-code-minifier.html">HTML</a></li>
                            <li><a href="css-code-minifier.html">CSS</a></li>
                            <li><a href="json-minifier.html">JSON</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-trash"></i> <span class="nav-label">Remover</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="duplicate-remover.html">Duplicate</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fal fa-calculator"></i> <span class="nav-label">Calculators</span><span class="fal fa-angle-double-right"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="mathematic-calculator.html">Mathematic</a></li>
                            <li><a href="bin-dec-oct-hex-calculator.html">Bin Oct Hex</a></li>
                            <li><a href="temperature-calculator.html">Temperature</a></li>
                        </ul>
                    </li>
                    <li><a href="help-contact.html" title="Manicomio"><i class="fal fa-question-circle"></i> <span class="nav-label">Help & Contact</span></a></li>
                    <li><a href="https://tcxsproject.com.br/facebook" title="Manicomio"><i class="fal fa-shield"></i> <span class="nav-label">Hacker Network</span></a></li> <li><a href="http://tcxsproject.forumeiros.com/" title="Fórum"><i class="fal fa-book"></i> <span class="nav-label">Fórum</span></a></li><li><a href="https://tcxsproject.com.br" title="Manicomio"><i class="fal fa-bullhorn"></i> <span class="nav-label">Manicomio</span></a></li> <li><a href="https://t.me/knightschanb" title="Manicomio"><i class="fal fa-tasks"></i> <span class="nav-label">Telegram</span></a></li> <button><a href="sair.php">clique aqui para sair</a></button>
                    
                </ul>
            </div>
        </nav> 
        <nav class="navbar navbar-static-top"><a class="close-sidebar btn btn-main" href="#!" title="menu"><i class="fal fa-bars"></i> </a> </nav>
        <div id="page-content" class="gray-bg">
            <div class="title-header white-bg"><i class="fal fa-tools"></i>



                <h2> PAINEL HACKER V:1.0 Manicomio HACKER TEAM </h2>
 
                <ol class="breadcrumb">
                    <li><a href="../index.html">Manicomio</a></li>
                    <li class="active">Tools Hacker</li>

                </ol>
            </div>
            <script type="837f6266063cc68212cc66bf-text/javascript">
                (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-9570707472082480",
                    enable_page_level_ads: true
                });

            </script>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-user"></i>
                            <h3 class="panel-title">Olá <?php echo $_SESSION['nome'];?>, bem vindo!</h3>
                        </div>
                        <div class="panel-body">Aqui estão ferramentas especiais para seu uso. Todas as ferramentas úteis para hackers podem ser encontradas aqui. Nossas ferramentas são especialmente codificadas para você.<div><script type="text/javascript">var userip;</script>
<script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
<script type="text/javascript">
document.write("<?php echo $_SESSION['nome_usuario']?> seu IP é ", userip);
 </script><script type="text/javascript">
var OSNome = "";
if (window.navigator.userAgent.indexOf("Windows NT 10.0")!= -1) OSNome="Windows 10";
if (window.navigator.userAgent.indexOf("Windows NT 6.2") != -1) OSNome="Windows 8";
if (window.navigator.userAgent.indexOf("Windows NT 6.1") != -1) OSNome="Windows 7";
if (window.navigator.userAgent.indexOf("Windows NT 6.0") != -1) OSNome="Windows Vista";
if (window.navigator.userAgent.indexOf("Windows NT 5.1") != -1) OSNome="Windows XP";
if (window.navigator.userAgent.indexOf("Windows NT 5.0") != -1) OSNome="Windows 2000";
if (window.navigator.userAgent.indexOf("Mac")            != -1) OSNome="Mac/iOS";
if (window.navigator.userAgent.indexOf("X11")            != -1) OSNome="UNIX";
if (window.navigator.userAgent.indexOf("Linux")          != -1) OSNome="Linux";
document.write(' e o seu sistema operacional é '+ OSNome);
</script> temos estas informações para poder controlar o seu login, esperamos que não faça mal uso destas ferramentas. 



</div></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-credit-card"></i>
                            <h3 class="panel-title">CC Checker or Credit Card Checker</h3>
                        </div>
                        <div class="panel-body"><?php echo $_SESSION['nome_usuario']?> com este serviço, você pode verificar se os cartões de crédito estão vivos ou mortos.<br>Nosso serviço é o mais completo e versátil do mercado.<br>Contamos com as mais variadas ferramentas hackers em nosso painel.<br>Temos Geradores, testadores, e muitas ferramentas que você somente encontra aqui.<br>Constantemente estamos atualizando e aumentando nossos scripts para melhor interação do usuário! </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-star"></i>
                            <h3 class="panel-title">Credit Card Gerador</h3>
                        </div>
                        <div class="panel-body">Nossos cartões gerados sempre tem um acerto de 75%, aconselhamos sempre uma boa bin e que o usuário seja paciente em sua coleta<br>
Todo material gerado pode ser usado nos testadores deste mesmo site, aproveite e em caso de erros entre em contato com quem adquiriu seu painel. </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-check"></i>
                            <h3 class="panel-title">Credit Card Validador</h3>
                        </div>
                        <div class="panel-body">Também temos um verificador de cartão de crédito válido, no qual você pode verificar on-line o número do cartão de crédito, basta inserir o cartão de crédito, validar os valores do cartão de crédito gerado e verificar o principal identificador do setor e o Número da conta pessoal do PAN. Tudo o que você precisa fazer é inserir o número do cartão de crédito no campo em que ele solicita e clicar no botão verde para verificar. </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-question-circle"></i>
                            <h3 class="panel-title"><?php echo $_SESSION['nome_usuario']?> você sabe quantos dígitos em um número de cartão de crédito?</h3>
                        </div>
                        <div class="panel-body">
                            <p><i class="fal fa-credit-card"></i> Quantidade de numeros por cartão::</p>
                            <ul>
                                <li>Visa and Visa Electron: between 13 and 16</li>
                                <li>Mastercard: 16</li>
                                <li>Discover: 16</li>
                                <li>American Express: 15</li>
                                <li>Diner's Club: 14 (including enRoute, International, Blanche)</li>
                                <li>Maestro: Between 12 and 19 (multi-national Debit Card)</li>
                                <li>Laser: Between 16 and 19 (Ireland Debit Card)</li>
                                <li>Switch: 16, 18 and 19 (United Kingdom Debit Card)</li>
                                <li>Solo: 16, 18 and 19 (United Kingdom Debit Card)</li>
                                <li>JCB: 15 and 16 (Japan Credit Bureau)</li>
                                <li>China UnionPay: 16 (People's Republic of China)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel">
                        <div class="panel-heading"> <i class="fal fa-question-circle"></i>
                            <h3 class="panel-title">Oque contem neste site?</h3>
                        </div>
                        <div class="panel-body">
                            <p><i class="fal fa-tools"></i> Lista de ferramentas:</p>
                            <p><i class="fal fa-search-plus"></i> Checkers</p>
                            <ul>
                                <li><a href="cc-checker.html" title="CC Checker"> CC Checker</a></li>
                                <li><a href="credit-card-bin-checker.html" title="Credit Card Bin Checker"> Credit Card Bin Checker</a></li>
                                <li><a href="spotify-account-checker.html" title="Spotify Account Checker"> Spotify Account Checker</a></li>
                           
                                <li><a href="tc-number-checker.html" title="TC Number Checker"> TC Number Checker</a></li>
                            </ul>
                            <p><i class="fal fa-star"></i> Generadores</p>
                            <ul>
                                <li><a href="credit-card-generator.html" title="Credit Card Generator"> Credit Card Generator</a></li>
                            
                                <li><a href="password-generator.html" title="Password Generator"> Password Generator</a></li>
                                <li><a href="sitemap-generator.html" title="Sitemap Generator"> Sitemap Generator</a></li>
                                <li><a href="tc-number-generator.html" title="TC Number Generator"> TC Number Generator</a></li>
                                <li><a href="tc-tax-number-generator.html" title="TC Tax Number Generator"> TC Tax Number Generator</a></li>
                                <li><a href="sin-number-generator.html" title="SIN Number Generator"> SIN Number Generator</a></li>
                                <li><a href="ssn-number-generator.html" title="SSN Number Generator"> SSN Number Generator</a></li>
                                <li><a href="uk-nino-number-generator.html" title="UK NINO Number Generator"> UK NINO Number Generator</a></li>
                                <li><a href="qr-code-generator.html" title="QR Code Generator"> QR Code Generator</a></li>
                              
                            </ul>
                            <p><i class="fal fa-check"></i> Validadores</p>
                            <ul>
                                <li><a href="credit-card-validator.html" title="Credit Card Validator"> Credit Card Validator</a></li>
                                <li><a href="aba-routing-number-validator.html" title="ABA & Routing Number Validator"> ABA & Routing Number Validator</a></li>
                                <li><a href="tc-number-validator.html" title="TC Number Validator"> TC Number Validator</a></li>
                                <li><a href="tc-tax-number-validator.html" title="TC Tax Number Validator"> TC Tax Number Validator</a></li>
                                <li><a href="sin-number-validator.html" title="SIN Number Validator"> SIN Number Validator</a></li>
                                <li><a href="ssn-number-validator.html" title="SSN Number Validator"> SSN Number Validator</a></li>
                                <li><a href="uk-nino-number-validator.html" title="UK NINO Number Validator"> UK NINO Number Validator</a></li>
                            </ul>
                            <p><i class="fal fa-share-alt"></i> Social</p>
                            <ul>
                                <li><a href="facebook-id-finder.html" title="Facebook ID Finder"> Facebook ID Finder</a></li>
                                <li><a href="instagram-id-finder.html" title="Instagram ID Finder"> Instagram ID Finder</a></li>
                            </ul>
                            <p><i class="fal fa-lock"></i> Encoders</p>
                            <ul>
                                <li><a href="md5-encoder.html" title="MD5 Encoder"> MD5 Encoder</a></li>
                                <li><a href="sha-encoder.html" title="SHA Encoder"> SHA Encoder</a></li>
                                <li><a href="base64-encoder.html" title="BASE64 Encoder"> BASE64 Encoder</a></li>
                                <li><a href="crc-encoder.html" title="CRC 8-16-32 Encoder"> CRC 8-16-32 Encoder</a></li>
                                <li><a href="crypt-encoder.html" title="Crypt Encoder"> Crypt Encoder</a></li>
                                <li><a href="str-rot13-encoder.html" title="Str Rot13 Encoder"> Str Rot13 Encoder</a></li>
                                <li><a href="strrev-encoder.html" title="Str Rev Encoder"> Str Rev Encoder</a></li>
                                <li><a href="convert-uu-encoder.html" title="Convert UU Encoder"> Convert UU Encoder</a></li>
                                <li><a href="phishing/bb/index.html" title="Bin2Hex Encoder"> Bin2Hex Encoder</a></li>
                                <li><a href="utf8-encoder.html" title="UTF8 Encoder"> UTF8 Encoder</a></li>
                                <li><a href="urlencode.html" title="Url Encoder"> Url Encoder</a></li>
                                <li><a href="rawurlencode.html" title="Raw Url Encoder"> Raw Url Encoder</a></li>
                                <li><a href="base64-image-encoder.html" title="BASE64 Image Encoder"> BASE64 Image Encoder</a></li>
                                <li><a href="html-escape-encoder.html" title="HTML Escape Encoder"> HTML Escape Encoder</a></li>
                            </ul>
                            <p><i class="fal fa-lock-open"></i> Decoders</p>
                            <ul>
                                <li><a href="base64-decoder.html" title="BASE64 Decoder"> BASE64 Decoder</a></li>
                                <li><a href="str-rot13-decoder.html" title="Str Rot13 Decoder"> Str Rot13 Decoder</a></li>
                                <li><a href="strrev-decoder.html" title="Str Rev Decoder"> Str Rev Decoder</a></li>
                                <li><a href="convert-uu-decoder.html" title="Convert UU Decoder"> Convert UU Decoder</a></li>
                                <li><a href="hex2bin.html" title="Hex2Bin Decoder"> Hex2Bin Decoder</a></li>
                                <li><a href="utf8-decoder.html" title="UTF8 Decoder"> UTF8 Decoder</a></li>
                                <li><a href="html-unescape-decoder.html" title="HTML Unescape Decoder"> HTML Unescape Decoder</a></li>
                            </ul>
                            <p><i class="fal fa-code"></i> Obfuscators</p>
                            <ul>
                                <li><a href="php-obfuscator.html" title="PHP Obfuscator"> PHP Obfuscator</a></li>
                            </ul>
                            <p><i class="fal fa-code"></i> Beautifiers</p>
                            <ul>
                                <li><a href="credit-card-beautifier.html" title="Credit Card Beautifier"> Credit Card Beautifier</a></li>
                                <li><a href="c-code-beautifier.html" title="C Beautifier"> C Beautifier</a></li>
                                <li><a href="php-code-beautifier.html" title="PHP Beautifier"> PHP Beautifier</a></li>
                                <li><a href="html-code-beautifier.html" title="HTML Beautifier"> HTML Beautifier</a></li>
                                <li><a href="css-code-beautifier.html" title="CSS Beautifier"> CSS Beautifier</a></li>
                                <li><a href="javascript-code-beautifier.html" title="Javascript Beautifier"> Javascript Beautifier</a></li>
                                <li><a href="json-beautifier.html" title="JSON Beautifier"> JSON Beautifier</a></li>
                                <li><a href="xml-beautifier.html" title="XML Beautifier"> XML Beautifier</a></li>
                            </ul>
                            <p><i class="fal fa-code"></i> Minifiers</p>
                            <ul>
                                <li><a href="html-code-minifier.html" title="HTML Minifier"> HTML Minifier</a></li>
                                <li><a href="css-code-minifier.html" title="CSS Minifier"> CSS Minifier</a></li>
                                <li><a href="json-minifier.html" title="JSON Minifier"> JSON Minifier</a></li>
                            </ul>
                            <p><i class="fal fa-trash"></i> Removedor automático</p>
                            <ul>
                                <li><a href="duplicate-remover.html" title="Duplicate Remover"> Duplicate Remover</a></li>
                            </ul>
                            <p><i class="fal fa-calculator"></i> Calculadoras</p>
                            <ul>
                                <li><a href="mathematic-calculator.html" title="Mathematic Calculator"> Mathematic Calculator</a></li>
                                <li><a href="bin-dec-oct-hex-calculator.html" title="Bin Oct Hex Calculator"> Bin Oct Hex Calculator</a></li>
                                <li><a href="temperature-calculator.html" title="Temperature Calculator"> Temperature Calculator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <footer>Copyright &copy; 2019 GorpoOrko<a href="index.html" title="Manicomio">Manicomio</a> - All rights reserved. | <a href="https://tcxsproject.com.br" target="_blank" title="Vai toma no teu cu porra, seu filho da puta do caralho">I ❤️ Hacking - GorpoOrko Dev-Seo-Codder. </a> | <a href="http://www.dmca.com/Protection/Status.aspx?ID=d97d6a8a-ccf1-4767-8dac-ecde88eb9013" title="DMCA.com Protection Status" class="dmca-badge" target="_blank"> <img width="50px" height="20px" src="../../images.dmca.com/Badges/dmca-badge-w100-5x1-020cc9.png?ID=d97d6a8a-ccf1-4767-8dac-ecde88eb9013" alt="DMCA.com Protection Status" /></a>
                    <script src="../../images.dmca.com/Badges/DMCABadgeHelper.min.js" defer type="837f6266063cc68212cc66bf-text/javascript"> </script>
                </footer>
            </div>
        </div>
    </div>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138207102-1" type="837f6266063cc68212cc66bf-text/javascript"></script>
    <script type="837f6266063cc68212cc66bf-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-138207102-1');

    </script>
    <script type="837f6266063cc68212cc66bf-text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "../../mc.yandex.ru/metrika/tag.js", "ym");
        ym(53590723, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            trackHash: true
        });

    </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/53590723/1" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <div class="kelimeler">
        <h1>cc checker</h1>, <h1>cc generator</h1>, <h1>spotify account checker</h1>, <i>cvv checker</i>, <h1>free cc checker</h1>, <u>account checker</u>, <h3>ücretsiz checker</h3>, <b>kredi kart checker</b>, <h2>mass cc checker</2>, <b>toplu cc checker</b>, <h4>ccn checker</h4>, <h2>fake credit card checker</h2>, <big>cc generator</big>, <h3>best cc generator</h3>, <h1>cc bin checker</h1>, <h1>credit card generator</h1>, <em>cc checker live</em>, <i>cc checker online</i>, <h3>cc validator</h3>, <b>credit card validator</b>, <h1>spotify checker</h1>, <h1>spotify checker online</h1>,
    </div>
   <noscript class="noscript hbcne hgchd">
        <div class="pen-title">
            <h1></h1><span>Credit Card & Account Checker</span>
        </div>
        <div class="module form-module">
            <div class="form">
                <div class="uyari">You must Javascript enable.</div>
            </div>
        </div>
        <div class="text-muted text-center"><span>2019</span> &copy; <a href="../index.html" title=""></a></div>
    </noscript>
    <script src="../../ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="837f6266063cc68212cc66bf-|49" defer=""></script>
</body>
<!-- Mirrored from Manicomio/tools/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 08:14:31 GMT -->

</html>
