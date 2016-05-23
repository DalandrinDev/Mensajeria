#!usr/bin/env
import pexpect
import time

contacto = "Sergio"
mensaje = "Este script funciona"
telegram = pexpect.spawn('/var/www/tg/bin/./telegram-cli /var/www/tg/tg-server.pub')
telegram.expect('\r\n>', timeout=2)
time.sleep(2)
telegram.sendline("contact_list")
telegram.expect('\r\n>', timeout=2)
time.sleep(2)
telegram.sendline("msg "+contacto+""+mensaje)
print ("Mensaje enviado a "+ contacto)
telegram.sendline("quit")