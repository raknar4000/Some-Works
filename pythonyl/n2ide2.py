# tingimuslause n'ited

kontoseis = 100
sisestatud_pin = input("Sisesta PIN-kood: ")
if sisestatud_pin == "1234":
    print("Sisenesid pangaautomaati! Pangakontol on " + str(kontoseis) + " eurot.")
    print("Sisesta, mitu eurot soovid välja võtta:")
    soovitud_raha = int(input())
    if soovitud_raha <= kontoseis:
        kontoseis = kontoseis - soovitud_raha #kontoseisu väärtus väheneb
        print("Raha välja võetud: " + str(soovitud_raha) + " eurot.")
    else:
        print("Kontol ei ole nii palju raha!")
    print("Pangakontol on järgi: " + str(kontoseis) + " eurot.")
else:
    print("Vale parool! Enesehävitusrežiim aktiveeritud: 3 ... 2 ... 1 ....")




    


