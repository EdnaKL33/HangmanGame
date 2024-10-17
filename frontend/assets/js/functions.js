newGame()
$(document).ready(function () {
    
    $('.redondo').on('click', function(){
        let opt = $(this).val();
        putOption(opt)
    })
    $('#clear_option').on('click', function(){
        clear();
    })
    $('#select_option').on('click', function(){
        let opt = $('#letter_selected').val()
        let g_id= $('#game_id').val()
        if (opt != '') {
            getHangmanResult(opt,g_id)
        }else{
            alert("Introduzca un numero")
        }
    })
    $('#new_game').on('click', function(){
        location.href='../player/hangman_game.php';
    })
})
function putOption(opt){
    $('#letter_selected').val(opt)
}
function clear(){
    $('#letter_selected').val('')
}
function newGame(){
    let pagina = "../functions/new_game.php"; 
    let datos = { letter: 0}; 
    let dtipo = "JSON"; 
    let tipo = "GET"; 
    let selector = putNewGame;
    ajax_function(pagina, datos, dtipo, tipo, selector);
}
function putNewGame(dt){
    console.log(dt)
    let word = dt.game_state.word
    $('#game_id').val(dt.game_id)
    $('#result').text(word)
}
function getHangmanResult(opt, g_id){
    let pagina = "../functions/player_function.php"; 
    let datos = { letter: opt, game_id: g_id }; 
    let dtipo = "JSON"; 
    let tipo = "GET"; 
    let selector = putHangmanResult;
    ajax_function(pagina, datos, dtipo, tipo, selector);
}
function putHangmanResult(dt){
    console.log(dt)
    //let incorrect = dt.game_state.incorrect_guesses
    let incorrect =dt.success
    let game_over = dt.game_state.game_over
    let word = dt.game_state.word
    if (game_over == false) {
        if (incorrect == false && parseInt($('#incorrect').val()) < 8) {
            let inc = parseInt($('#incorrect').val())+1
            $('#incorrect').val(inc)
            let image = `../assets/images/ahorcado/${inc}.png`
            let H = `<img src="${image}" alt="" id="image_boy" height="350px" width="auto">`
            $('#image_selected').html(H);
        }
        
    }
    if (game_over == true) {
        if (parseInt($('#incorrect').val())>=7) {
            $('#desactive_game').css('display','block')
            $('#active_game').css('display','none')
            $('#end_result').val('Lo siento, has perdido!')
        }else{
            $('#desactive_game').css('display','block')
            $('#active_game').css('display','none')
            $('#end_result').val('Felicidades Ganaste')
        }
    }
    $('#result').text(word)

}
function ajax_function(pagina, datos, dtipo, tipo, selector){
    $.ajax({
      type: tipo,
      dataType: dtipo,
      data: datos,
      url: pagina,
      success: function (respuesta) {
        selector(respuesta)
      }, error(e) {
        console.log(e);
      }
    });
}