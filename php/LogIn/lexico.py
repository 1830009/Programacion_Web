# Tabla de transiciones

# Posibles entradas:
# "0" Caracter A-Z 
# "1" Caracter 0-9
# "2" Caracter =
# "3" ESPACIO EN BLANCO
# "4" EOL
# "5" Caracter no definido (mover al final)


dfa_Lex = {0:{0:1, 1:2, 2:3, 3:0, 4:0, 5:5},
           1:{0:1, 1:1, 2:0, 3:0, 4:0, 5:5},
           2:{0:5, 1:2, 2:0, 3:0, 4:0, 5:5},
           3:{0:0, 1:0, 2:0, 3:0, 4:0, 5:5},
           4:{0:4, 1:4, 2:4, 3:4, 4:0, 5:5},
		   5:{0:5, 1:5, 2:5, 3:5, 4:5, 5:5}, 
}


def tipo_caracter (caracter):
	tipo=50
	if caracter.isalpha():
		print(caracter+'-alfabetico')
		tipo=0
	elif caracter.isdigit():
		print(caracter+'-digito')
		tipo=1
	elif caracter=="=":
		print(caracter+'-IGUAL')
		tipo=2
	elif caracter==" ":
		print(caracter+'-ESPACIO')
		tipo=3
	elif caracter=="\0":
		print(caracter+'-FIN LINEA')
		tipo=4
	else:
		tipo=5
		print(caracter+'error')
	return tipo

def accepts_Lex(transitions,initial,ss):
	print ("String to be analyzed: "+ss)
	s =ss+"\0"; # Insertando de manera artificial el fin de linea 
	state = initial	
	previous_char=''
	indice=0
	while (indice < len(s)):	
		c=tipo_caracter(s[indice])
		#if (c!=4):
		print ("+----------------------------------")
		print ("\tprevious char: "+str(previous_char))
		print ("\tchar: "+str(s[indice]))
		print ("\ttype_input: "+str(c))
		print ("\tprevious state: "+str(state))
		previous_char=s[indice]
		previous_state=state		
		state = transitions[state][c]
		print ("\tnew state: "+str(state))
		if (state==0):
			if (previous_state==1): # Viene de regreso de un identificador
				print ("\t\t*****Identificador")
			if (previous_state==2): # Viene de regreso de un identificador
				print ("\t\t*****Numero")
			if (previous_state==3): # Viene de regreso de un identificador
				print ("\t\t*****SIMBOLO =")

			# Procesar el origen para determinar si se avanza o se queda igual
			if (previous_char=="=") or (tipo_caracter(previous_char)==1):
				indice=indice
			#elif tipo_caracter(previous_char)==2: # Es un numero
			#	indice=indice
			else:	
				indice=indice+1
		else:
			indice=indice+1	

		if (state==5): # Termianr el programa, es algo grave
			print ("\t\t*****TOKEN INVALIDO!!")
			exit()	
	#return state in accepting

Cadena='ifu26=60' # identificador = numero
Cadena=' ifu26 = 60 ' # identificador = numero
Cadena='marco123=juanlopezi122=abcdef022' # identificador = identificador = identificador
Cadena='125=123=555' # numero = numero = numero
Cadena='1#25=123=555'  #  caracter no definido
Cadena='125cab'  #  caracter no definido
Cadena='cab125'  #  identifciador valido

accepts_Lex(dfa_Lex,0,Cadena)