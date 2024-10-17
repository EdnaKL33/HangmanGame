<?php
include('path/header.php')
?>
<div class="row mt-4" style="margin-top:3rem !important;">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <h1 style="color:#743222; font-size: 3rem">Juego del Ahorcado</h1>
    </div>
    <div class="col-7 bg-white p-1 " id="active_game">
        <div class="mt-4 mb-4 d-flex justify-content-center align-items-center" style="margin-top:3rem !important;">
            <div>
                <input class="text-center" id="letter_selected" type="text" value="" style="width: 5rem;" disabled>
                <input class="text-center" id="game_id" type="hidden" value="" style="width: 5rem;" disabled>
            </div>
            <div class="ml-4">
                <button style="font-size: 1.5rem;" id="select_option">Seleccionar</button>
                <button style="font-size: 1.5rem; background-color: #fab98e;" id="clear_option">Limpiar</button>
            </div>
        </div>
        <div class="card h-100 mt-4" style="background-color: #f87959;">
            <div class="card-body">
                <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between border-radius-lg" style="background-color: #f87959;">
                    <div class="d-flex flex-column">
                        <input value="a" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="b" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="c" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="d" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="e" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="f" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="g" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="h" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="i" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="j" class="btn redondo" type="button">
                    </div>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between border-radius-lg" style="background-color: #f87959;">
                    <div class="d-flex flex-column">
                        <input value="k" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="l" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="m" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="n" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="ñ" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="o" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="p" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="q" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="r" class="btn redondo" type="button">
                    </div>
                    <div class="d-flex flex-column">
                        <input value="s" class="btn redondo" type="button" >
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between border-radius-lg" style="background-color: #f87959;">
                    <div class="d-flex flex-column">
                        <input value="t" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="u" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="v" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="w" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="x" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="y" class="btn redondo" type="button" >
                    </div>
                    <div class="d-flex flex-column">
                        <input value="z" class="btn redondo" type="button" >
                    </div>
                </li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="col-7 bg-white p-1 " id="desactive_game" hidden>
        <div class="mt-4 mb-4 d-flex justify-content-center align-items-center" style="margin-top:3rem !important;">
            <div>

                <input class="text-center" id="end_result" type="text" value=""  disabled>
            </div>
            <div class="ml-4">
                <button style="font-size: 1.5rem;" id="new_game">Nuevo guego</button>
            </div>
        </div>
    </div>
    <div class="col-4 bg-white">
        <div class="d-flex justify-content-center align-items-center">
            <h1 id="result"></h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <input type="hidden" value="1" id="incorrect">
            <div id="image_selected">
                <img src="../assets/images/ahorcado/1.png" alt="" id="image_boy" height="350px" width="auto">
            </div>
        </div>
    </div>
</div>

<?php
include('path/footer.php')
?>