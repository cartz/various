on *:OPEN:?:{ If ($away) {
msg $nick Ich bin gerade wahrscheinlich nicht anwesend. Wenn doch werde ich so schnell es geht antworten. Bitte warte ein paar Minuten. Danke ;-) }
else { msg $nick Hi $nick es sieht so aus, als ob ich gerade da bin. Sollte ich beschäftigt sein, so bitte ich dich trotzdem um ein wenig Geduld mit mir :-) }
}
}

on *:ACTION:*hiermussdeinnickstehen*:#:/describe $chan $1 $nick $3- 