# IOT-PHPython-2018
This is a easy to set up IoT system that uses a PHP local server to ,preferably in raspberry pi and Beagle bone black, to trigger python GPIO control files. 

1.CONFIGURATION.
All you ahve to do is to set up a local server running php. This is done through the installation of apache which comes bundled with PHP.

a).SETTING UP AN APACHE WEB SERVER ON A RASPBERRY PI

Apache is a popular web server application you can install on the Raspberry Pi to allow it to serve web pages.On its own, Apache can serve HTML files over HTTP, and with additional modules can serve dynamic web pages using scripting languages such as PHP.

b).INSTALL APACHE.

First, update the available packages by typing the following command into the Terminal:

sudo apt-get update
Then, install the apache2 package with this command:

sudo apt-get install apache2 -y


2.TESTING WEBSERVER.

By default, Apache puts a test HTML file in the web folder. This default web page is served when you browse to http://localhost/ on the Pi itself, or  http://192.168.1.10 (whatever the Pi's IP address is) from another computer on the network. To find the Pi's IP address, type hostname -I at the command line (or read more about finding your IP address).

3.GOOD LUCK!
:-)
