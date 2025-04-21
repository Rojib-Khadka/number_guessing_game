questions=("How many elements are there in the periodic table?:",
"Which animal lays the largest eggs?",
"What is the most abudant gas in earth's atmoshphere?:",
"How many bones are in the human body?",
"Which planet in the solar system is the hottest?")
options=(
("A.116 ","B.117 ","C.118 ","D.119 "),
("A.Whale ","B.Crocodile ","C.Elephant ","D.Ostrisch "),
("A.Nirogen","B.Oxygen ","C.Carbon-Dioxide ","D.Hydrogen "),
("A.201","B.202 ","C.203 ","D.206 "),
("A.Mercury","B.Venus ","C.Mars ","D.Earth "))
answers=("C","D","A","D","B")
guesses=[]
score=0
question_num=0
for question in questions:
    print("-----------------")
    print(question)
    for option in options[question_num]:
        print(option)
    guess=input("Enter (A,B,C,D):   ").upper()
    guesses.append(guess)
    if guess ==answers[question_num]:
        score += 1
        print("Correct")
    else:
        print("Incorrect")      
        print(f"{answers[question_num]}is correct answer")
    question_num += 1
    for answer in answers:
        print(answer,end=" ")
        print()
    score= int(score/len(questions)*100)
    print(f"Your score is {score}%")


        

