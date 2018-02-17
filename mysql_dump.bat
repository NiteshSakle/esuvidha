@echo off
For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set mydate=%%c-%%a-%%b)
For /f "tokens=1-2 delims=/:" %%a in ("%TIME%") do (set mytime=%%a%%b)

SET backupdir=C:\xampp\htdocs\backup
SET mysqluername=root
SET mysqlpassword=''
SET database=civil

C:\xampp\mysql\bin\mysqldump.exe -uroot -p  %database% > %backupdir%\%database%_%mydate%.sql


copy C:\xampp\htdocs\backup\%database%_%mydate%.sql \\192.168.100.59\11-5-16\EsuvidhaBackup\%database%_%mydate%.sql