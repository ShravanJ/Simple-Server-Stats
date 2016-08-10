# Simple-Server-Stats

a simple php page for viewing the status of a linux server

![alt text] (https://github.com/ShravanJ/Simple-Server-Stats/blob/master/screenshot.png)

Current features
================
-Internal network IP of server

-Uptime

-CPU temperature (in degrees fahrenheit)

-Live updating by the second (via meta refresh)

Pre-reqs
========
-A linux system with php and an HTTP server installed 

-CPU tempeature monitoring has only been tested on the Raspberry Pi Model B (1st generation)

Setup
=====
Setting up Simple Server Stats is easy. The CPU temperature reading function has only been tested on the Raspberry Pi, so your mileage may vary with different systems. First, place the status.php file in the diretory you want to be able to access it from, and make sure your HTTP server (apache, nginx) has a document root to access it. Then, place the temp.sh (CPU temperature calculating shell script) in your desired directory. Modify the status.php file to point to the correct directory for the temp.sh file. Make sure you also chmod +x the file before you try to run it. 

**Additional features coming soon!**
