#Este sript se va a encargar de comprobar los mensajes que no están enviados, y tras ello hacer una serie de consultas para obtener el alias y el mensaje que se quiere enviar, para finalmente cambiar el envio a si.

#IMPORTANTE:
#Este archivo debe guardarse para que esté más seguro en la carpeta /var.

#!usr/bin/env
#-----Importa los modulos necesarios----#
import pexpect #Modulo necesario para ejecutar programas externos, como Telegram-cli.
import time #Modulo para usar el tiempo.
import MySQLdb as mbd #Modulo pra poder hacer consultas y acciones con SQL.

#-----Aqui se meten los datos de conexión a la base de datos-----

host = 'localhost' #El tipo de servidor.
usuario = 'admin' #El usuario.
clave = 'uned' #La contraseña.
basedatos = 'mensajeria' #La base de datos que usaremos.
con = mbd.connect(host, usuario, clave, basedatos) #Esto crea un cursor que usaremos para hacer el codigo que necesitamos.

#-----Aquí se inicia Telegram-cli-----

telegram = pexpect.spawn('/var/www/tg/bin/./telegram-cli /var/www/tg/tg-server.pub') #Iniciar Telegram-cli, que estará guardado en esa ruta (la ruta puede variar).
telegram.expect('\r\n>', timeout=2) #Necesario para iniciar Telegram-cli.
time.sleep(2) #Debemos esperar 2 segundos para que el programa se ejecute correctamente.

telegram.sendline("contact_list") #Ejecutamos el primer comando, que nos permite refrescar la lista de los contactos que tengamos agregados.
#telegram.expect('\r\n>', timeout=2) probar esta línea de codigo.
time.sleep(2) #Debemos esperar 2 segundos para que de tiempo a que la lista de contactos se refresque.

#-----Creamos el cursor-----

cur = con.cursor(mbd.cursors.DictCursor)

#-----Empieza las consultas a la base de datos-----

sinenviar = cur.execute("SELECT * FROM enviar WHERE enviado = 'no'") #Se guarda en la variable la consulta de todos los mensajes que no estan enviados.
noenviados = cur.fetchall() #Almacena cada uno de los datos de la consulta anterior.
for mne in noenviados: #Por cada elemento de los resultados obtenidos sucederá lo siguiente.
	#mne["idenviar"] devuelve string.
	#mne["mensaje_idmensaje"] devuelve string.
	#mne["idtutor"] devuelve string.

	#-----Obtiene el mensaje-----

	consulta = "SELECT * FROM mensaje WHERE idmensaje = "+str(mne["mensaje_idmensaje"]) #Almacena todos los campos de la tabla mensaje en los que la id del mensaje sea igual a la id del mensaje obtenida de la tabla enviar.
	respuesta = cur.execute(consulta) #Ejecuta la consulta anterior.
	textos = cur.fetchall() #Almacena los datos de uno en uno.
	for texto_a in textos: #Por cada elemento en textos hace lo siguiente
		texto = texto_a["texto"]

	#-----Obtiene el tutor-----

	consulta = "SELECT * FROM tutor WHERE idtutor = "+str(mne["idtutor"]) #Almacena todos los campos de la tabla tutor en los que la id del tutor sea igual a la id del tutor obtenida de la tabla enviar.
	respuesta = cur.execute(consulta) #Ejecuta la consulta anterior.
	tutores = cur.fetchall() #Almacena los datos de uno en uno.
	for tutor_a in tutores: #Por cada elemento en tutores hace lo siguiente
		tutor = tutor_a["alias"]
	print "--------------------------------------------"

	#-----Envia los datos-----

	telegram.sendline("msg "+tutor+" "+texto) #Envia el mensaje a los usuarios y el texto en las variables almacenadas.
	consulta = "UPDATE enviar SET enviado = 'si' WHERE idenviar = "+str(mne["idenviar"]) #Est consulta va a cambiar el estado de enviado de 'no' a sí al usuario que haya enviado el mensaje.
	cur.execute(consulta) #Ejecuta la consulta anterior.
	con.commit() #Permite actualizar la base de datos con la útima consulta.
	time.sleep(1) #Este segundo de espera permite que todos los mensajes llegen a sus destinatarios, así el programa no se colapsa.
	

#-----Ahora cerramos Telegram, el cursor, y la conexión a la base de datos-----

telegram.sendline("quit") #Cierra la conexión con Telegram
con.close() #Cierra la conexción con la base de datos.
cur.close()	#Cierra el cursor.