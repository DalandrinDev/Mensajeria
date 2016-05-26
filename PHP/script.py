#!usr/bin/env
import pexpect
import time
import MySQLdb as mbd

host = 'localhost'
usuario = 'admin'
clave = 'uned'
basedatos = 'mensajeria'
con = mbd.connect(host, usuario, clave, basedatos)

telegram = pexpect.spawn('/var/www/tg/bin/./telegram-cli /var/www/tg/tg-server.pub')
telegram.expect('\r\n>', timeout=2)
time.sleep(2)

telegram.sendline("contact_list")
telegram.expect('\r\n>', timeout=2)
time.sleep(2)

cur = con.cursor(mbd.cursors.DictCursor)
enviado = cur.execute("SELECT enviado FROM enviar WHERE enviado = 'no'")
rowenviado = cur.fetchall()
for row in rowenviado:
	if row["enviado"] =='no':
		cambio = cur.execute("UPDATE enviar SET enviado = 'si'")
		con.commit()
		with con:
			cur.execute("SELECT texto, alias FROM mensaje INNER JOIN tutor WHERE enviar.mensaje_idmensaje = mensaje.idmensaje")
			rows = cur.fetchall()
			for row in rows:
				telegram.sendline("msg "+row["alias"]+ " "+row["texto"])
				print "Mensaje enviados con éxito"
telegram.sendline("quit")
