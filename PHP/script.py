#!usr/bin/env
import pexpect
import time
import MySQLdb

host = 'localhost'
usuario = 'admin'
clave = 'uned'
basedatos = 'mensajeria'
datos = [host, usuario, clave, basedatos]
db = MySQLdb.connect(*datos)

cursor =db.cursor()

consulta = "SELECT alias FROM tutor WHERE alias = '@SirDan93'"
cursor.execute(consulta)
contacto = cursor.fetchall()
print contacto

mensaje = "Hola"

telegram = pexpect.spawn('/var/www/tg/bin/./telegram-cli /var/www/tg/tg-server.pub')
telegram.expect('\r\n>', timeout=2)
time.sleep(2)

telegram.sendline("contact_list")
telegram.expect('\r\n>', timeout=2)
time.sleep(2)

telegram.sendline("msg "+contacto+""+mensaje)
print ("Mensaje enviado a "+ contacto)

telegram.sendline("quit")