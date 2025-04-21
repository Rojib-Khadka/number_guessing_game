def display_board(board):
    print()
    print(f" {board[0]} | {board[1]} | {board[2]} ")
    print("---|---|---")
    print(f" {board[3]} | {board[4]} | {board[5]} ")
    print("---|---|---")
    print(f" {board[6]} | {board[7]} | {board[8]} ")
    print()

def player_move(board, player):
    while True:
        move = input(f"Player {player}, enter your move (1-9): ")
        if move.isdigit():
            move = int(move)
            if 1 <= move <= 9:
                if board[move - 1] not in ['X', 'O']:
                    board[move - 1] = player
                    break
                else:
                    print("That spot is already taken. Try again.")
            else:
                print("Invalid number. Choose between 1 and 9.")
        else:
            print("Please enter a number.")

# Initial test
board = ['1','2','3','4','5','6','7','8','9']
display_board(board)
player_move(board, 'X')
display_board(board)
