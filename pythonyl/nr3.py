#Defineeri muutuja, kus on õpilase hinne numbrina. Anna muutujale väärtus vabal valikul.
 #Kasutades ühte tingimuslauset, kui hinne on 5, siis väljasta “eeskujulik”, 
#kui hinne on 4 väljasta “hea”, kui hinne on 3 väljasta “rahuldav”, muidu väljasta ”mitterahuldav”.


def opilase(hinne):
    if hinne == 5:
        return 'eeskujulik'
    elif hinne == 4:
        return 'hea'
    elif hinne == 3:
        return 'rahuldav'
    else:
        return 'mitterahuldav'

hinne = int(input("Sisesta hinne: "))
print(opilase(hinne))


  
