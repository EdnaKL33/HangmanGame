from flask import Flask, jsonify, request
from hangman import Hangman 

app = Flask(__name__)
# Diccionario para guardar los juegos en progreso
games = {}
@app.route("/api/new_game", methods=['POST'])
def new_game():
    word_list = ['amarillo', 'violetas','hortencias','camelias','elefante','gris','conejo','manzana','luciernagas','murcielago','fresa','sandia']

    game = Hangman(word_list)
    game_id = len(games) + 1
    games[game_id] = game
    return jsonify({"message": "Nuevo juego iniciado", "game_id": game_id, "game_state": game.get_game_state()})

@app.route('/api/guess/<int:game_id>', methods=['POST'])
def guess(game_id):
    
    if game_id not in games:
        return jsonify({"error": "Juego no encontrado"}), 404

    letter = request.json.get('letter', '')
    game = games[game_id]


    success, message = game.comparate_letters(letter)
    return jsonify({"success": success, "message": message, "game_state": game.get_game_state()})

    #return jsonify(games[game_id])

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5000)