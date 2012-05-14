#Spring

Digitale Vorgangsakte mit Rechnungs-/Gutschrifterstellung

##DB

- Tabellen columns dokumentieren
- Zeiten als Unix-time und sommit VARCHAR(10) oder INT(10)
- defaultwerte setzen
- Konvention einhalten für ID : entweder id oder id_<name> und nicht case_id_case
	- Beispiel case, client, users, groups, …
- Muss street wirklich vom Typen text sein?
- Boolean ist TINYINT und nicht SMALINT



###case

- timestamp ist `VARCHAR(11)`
- bekommt die id der `insurance`
- bekommt die id_client
- sind versicherung notwendig?

###client

- verliert case_id_case
- hat keine Telefonnummer?

###subcontractor

- wieso sind fast alle typen text?
- telefonnummern sollten nicht int, text sein sondern VARCAHR(60)
	- wegen + und etc
	
	
###doc
- Muss das nicht einem Case zugeordnet werden?

#### Typen
- Kostenübernahme     : cost_absorption
- Technikerrechnung   : bill_technicians
- Montagerechnung     : monteur_bill
- Ersatzteilrechnung  : service_part\_bill
- Notiz               : note
- Brief               : letter
- Ersatzwagenvertrag  : replacementcar_contract
- Ersatzwagenübergabe : replacementcar_delivery
- Fahrzeugübergabe    : car_delivery
