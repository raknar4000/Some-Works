# Defineeri nelja elemendiga list lindudest.
#  Väljasta listi esimene element. 
# Sorteeri list tähestikulises järjekorras. 
# Väljasta listi pikkus. Anna listi esimesele elemendile uus väärtus.
#  Väljasta tingimuslause abil, kas väärtus “Tuvi” on listis. 
# Väljasta alamlist, listi kahest viimasest elemendist.


linnud = ["kana", "emu", "vares", "tuvi"]

print(linnud[0])

linnud.sort()
print(linnud)



linnud[0] = "kukk"
print(linnud)


print(len(linnud))



if "tuvi" in linnud:
    print("Jah tuvi on listis!")

linnukesed = linnud[2:5]
print(linnukesed)
    
