foods=[]
prices=[]
total=0
while True:
    food=input("Enter the food (or press q for quit)")
    if food.lower()=="q":
        break
    else:
        price=float(input("Enter the price of the food"))
    foods.append(food)
    prices.append(price)
print("____Your Shopping Cart____") 
for food in foods:
    print(food)   
for price in prices:  
 total+=price
print("The total price of the food is",total)