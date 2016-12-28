#pour entrer un mot
mot = raw_input("  Entrer un mot: ");
# afficher le mot ecrit
print "vous avez ecrit : " + mot;
# on laise le choix de quitter ou pas
quitter = raw_input ("voulez vous quitter o/n?").lower()
# si on appuie sur o on quitte
if  quitter == "o":
    quit
# si on a ecrie N on reboot le bordel
while  quitter == "n":
    execfile("exo6.py")
