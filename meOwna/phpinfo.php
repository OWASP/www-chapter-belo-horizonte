<?php
//Este é um código que tem information Disclosure por phpinfo();
echo "<center><h1 style='color: yellow;'>>>>>VULNERABILIDADE ENCONTRADA<<<<<</h1><p>Este arquivo vaza informações sensíveis sobre o PHP em execução. Referências: https://www.acunetix.com/vulnerabilities/web/phpinfo-output-detected/ || https://www.invicti.com/web-vulnerability-scanner/vulnerabilities/information-disclosure-phpinfo/</p></center>";
phpinfo();
?>
