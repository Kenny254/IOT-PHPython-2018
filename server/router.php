<?php
if (isset($_POST['LightON']))
{
shell_exec("sudo python /var/www/html/controllers/lightson.py");
echo("on");
}
elseif (isset($_POST['LightOFF']))
{
shell_exec("sudo python /var/www/html/controllers/lightsoff.py");
echo("Off");
}
?>
