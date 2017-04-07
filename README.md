# AKBK-Vertretungsplan Web-App #

## Funktion ##
Diese Web-App liest, sobald man den Reiter Einstellungen auswählt die [Klassenplan-Seite] (http://www.akbk-infopoint.de/Klassenplan/) aus und generiert aus dem Ausgelesenen automatisch den Inhalt des Klassen-Selectors.

Wählt man nun eine Klasse aus, wird diese mit der Array-Position in einem Cookie gespeichert. Öffnet man den Reiter Stundenplan, liest die Seit diesen Cookie, die Arry-ID und das aktuelle Woche aus und generiert daraus den benötigten Link, um an die Inhalte des gewünschten Vertretungsplan für die gewählte Woche zu kommen. Ist dieses geschehen, liest die Web-App die generierte Seite aus und stellt den Vertreungsplan selbst dar. Gibt es für die angeforderte Wochen keinen Vertretungsplan, oder ist die generierte Adresse ungültig erhällt man die Meldung "Kein Vertretungsplan verfügbar". Über die Button in der Kopfzeile kann die Woche gewechselt werden. Hier kann man max. zwei Wochen in die Zukunft flippen.

Als Zusatz kann der Enduser in den Einstellungen auch noch eine der Schul-CD-Farben wählen. Diese wird ebenfalls in einem Cookie gespeichert und bei bedarf abgefragt. Die ausgewählte Farbe bildet sich in den Button-, Icon- und Link-Farben ab. Die Lebensdauer der Cookies ist auf ein halbes Jahr gesetzt, da man nicht jede Woche erneut seine Klasse aus dem Konvolut von Bildungsgängen auswählen möchte.