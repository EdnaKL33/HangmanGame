import random

class Hangman:
    def __init__(self, word_list):
        self.word_list = word_list
        self.game()
        
    def game(self):
        self.word = random.choice(self.word_list)
        self.guessed_letters = []
        self.count_incorrects = 0
        self.max_incorrects = 6
        self.word_completed = []

    def comparate_letters(self, letter):

        self.guessed_letters.append(letter)
        if letter in self.word:
            return True, "Adivinaste una letra!"
        else:
            self.count_incorrects += 1
            return False, "Te equivocaste!"
        
    def get_display_word(self):
        return ' '.join([letter if letter in self.guessed_letters else '_' for letter in self.word])

    def is_game_over(self):
        return self.count_incorrects >= self.max_incorrects or self.is_word_guessed()

    def is_word_guessed(self):
        return all(letter in self.guessed_letters for letter in self.word)

    def get_game_state(self):
        return {
            "word": self.get_display_word(),
            "guessed_letters": self.guessed_letters,
            "incorrect_guesses": self.count_incorrects,
            "max_incorrect_guesses": self.max_incorrects,
            "game_over": self.is_game_over(),
            "word_guessed": self.is_word_guessed()
        }
