import random

print("I am guessing the number between 1 to 100")
s=random.randint(1,100)
attempt=0
while True:
    attempt+=1
    u=int(input("Guess the number: "))
    if u>s:
        print("Too high")
    elif u<s:
      print("Too low")
    else:
       print("correct")    
       break 