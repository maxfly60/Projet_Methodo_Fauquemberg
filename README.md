# Projet_Methodo
Rendue : fin novembre 2020

!!!AVANT TRAVAILLE TJ PULL!!!

changer de branche :
'git checkout main'   //se placer dans la branche main
'git checkout master' //se placer dans la branche master

pour changer et envoyer un doc :
changer le doc en question,
dans gitbash/cmd/powershell, faire : 
'git add (chemin du fichier)'
'git commit -m "commentaire"'
'git push'
(faire 'git status' pour voir l'avancement entre ses commandes (avant et apres add))

recuperer les modifs des autres :
'git pull'

pour supprimer un fichier :
'git rm (chemin du fichier avec nom) -r -f'
'git commit -m "commentaire(mettre supp avec le nom du fichier de préférence)"'
'git push'
!!!Attention apres chaque suppression tout le monde doit pull sinon,
il y aura des fusions (merge) de la branche en question !!!
