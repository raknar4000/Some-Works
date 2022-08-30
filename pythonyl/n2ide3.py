temperature = int(input("Sisesta temperatuur: "))
is_raining = True
if temperature > 21:
    print("Go swimming")
elif temperature > 18 and is_raining:
    print("warm but raining")

#elif
#elif jne   
else:
    print('Play Disc')      