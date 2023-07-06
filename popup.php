<link rel="stylesheet" href="./animate.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    :root {
    --animate-duration: 0.5s;
    --animate-delay: 0.5s;
    --animate-repeat: 1;
    }
    .animate__animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-duration: var(--animate-duration);
        animation-duration: var(--animate-duration);
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    .animate__fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }
    @-webkit-keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    .animate__fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        }
        @-webkit-keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
    .animate__fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
        }
        @-webkit-keyframes fadeOutDown {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }

    .calculater__open{
        cursor: pointer;
        position: absolute;
        top: 30px;
        right: 30px;
        color: white;
        background-color: black;
        border: none;
        padding: 10px 20px;
        transition: 0.5s;
    }
    .calculater__open:hover{
        background-color: white;
        color: black;
    }

    .calculater{
        position: relative;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
    }
    .calculater__shell{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .calculater__body{
        position: fixed;
        max-width: 670px;
        max-height: 500px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        background-color: white;
        padding: 20px;
    }
    .calculater__body__container{
    
    }
    .calculater__body__container__close{
        cursor: pointer;
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 24px;
    }
    .calcul{
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .calcul input{
        padding: 10px 20px;
        border: none;
        background-color: rgba(0, 0, 0, 0.1);
    }
    .calcul h3{
        text-align: center;
        font-size: 32px;
    }
    .btms{
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    .btms button{
        border: none;
        padding: 10px 20px;
        transition: 0.5s;
        background-color: rgba(0, 0, 0, 0.1);
    }
    .btms button:hover{
        background-color: black;
        color: white;
    }
    .btm-calcul{
        border: none;
        padding: 10px 20px;
        transition: 0.5s;
        background-color: rgba(0, 0, 0, 0.1);
    }

    button{
        cursor: pointer;
    }

    .btm-calcul:hover{
        background-color: black;
        color: white;
    }

    .calcul select{
        width: 80px;
        padding: 10px;
        border: none; 
        background-color: rgba(0, 0, 0, 0.1)
    }
    
    
</style>

<div class="calculater__open">
    Попап
</div>

<div class='calculater'>
    <div class='calculater__shell animate__animated'></div>
    <div class='calculater__body animate__animated'>
            
        <article class='calculater__body__container'>
            <div class="calculater__body__container__close">X</div>
                <form class = 'calcul' action="">
                    <h3>Расчёт цены за услуги</h3>
                    <input class = 'x' name = 'x' placeholder = 'Колличество взрослых от 14 лет' type="text">
                    <input class = 'y' name = 'y' placeholder = 'Колличество детей 6-14 лет' type="text">
                    <input class = 'm' name = 'm' placeholder = 'Кооличество пенсионеров, инвалидов, ветеранов боевых действий (при предъявлении документов)' type="text">
                    <div class="selecter">
                        <select name="data" id="data">
                            <option value="1">пн-чт</option>
                            <option value="2">сб-вс (или праздники)</option>
                        </select>
                        <select name="timer" id="timer">
                            <option value="one">1 час</option>
                            <option value="twe">2 часа</option>
                            <option value="fore">4 часа</option>
                            <option value="unlimited">безлимит</option>
                        </select>
                    </div>
                    
                    <div class="result">
                        <span>0</span> руб
                    </div>
                    <button onClick = "return false;" class = 'btm-calcul'>Посчитать</button>
                    <div class="btms">
                        <button>Заказать</button>
                        <button>Уточнить адрес</button>
                    </div>
                </form>
        </article>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
<script src = "./jquery-3.6.3.min.js"></script>
<script>
    const $x = $('.x');
    const $y = $('.y');
    const $m = $('.m');
    const $data= $('#data');
    const $timer= $('#timer');

    $('.btm-calcul').click(() => {
        if($data.val() == '1'){
            switch ($timer.val()){
                case 'one':
                    let child = 450;
                    let abult = 300;
                    let disable = 300
                    let $result = $('.result span').html(Number($y.val())*abult + Number($x.val()*child) + Number($m.val()*disable))
                    break;
                case 'twe':
                    let child1 = 900;
                    let abult1 = 600;
                    let disable1 = 600
                    let $result1 = $('.result span').html(Number($y.val())*abult1 + Number($x.val()*child1) + Number($m.val()*disable1))
                    break;
                case 'fore':
                    let child2 = 1100;
                    let abult2 = 700;
                    let disable2 = 700
                    let $result2 = $('.result span').html(Number($y.val())*abult2 + Number($x.val()*child2) + Number($m.val()*disable2))
                    break;
                case 'unlimited': 
                    let child3 = 1300;
                    let abult3 = 800;
                    let disable3 = 800
                    let $result3 = $('.result span').html(Number($y.val())*abult3 + Number($x.val()*child3) + Number($m.val()*disable3))
                    break;
            }
        }
        else{
            switch ($timer.val()){
                case 'one':
                    let $child = 450;
                    let $abult = 300;
                    let $disable = 300
                    let $result = $('.result span').html(Number($y.val())*$abult + Number($x.val()*$child) + Number($m.val()*$disable))
                    break;
                case 'twe':
                    let $child1 = 900;
                    let $abult1 = 600;
                    let $disable1 = 600
                    let $result1 = $('.result span').html(Number($y.val())*$abult1 + Number($x.val()*$child1) + Number($m.val()*$disable1))
                    break;
                case 'fore':
                    let $child2 = 1300;
                    let $abult2 = 800;
                    let $disable2 = 800
                    let $result2 = $('.result span').html(Number($y.val())*$abult2 + Number($x.val()*$child2) + Number($m.val()*$disable2))
                    break;
                case 'unlimited': 
                    let $child3 = 1800;
                    let $abult3 = 950;
                    let $disable3 = 950
                    let $result3 = $('.result span').html(Number($y.val())*$abult3 + Number($x.val()*$child3) + Number($m.val()*$disable3))
                    break;
            }
        }
    })
    $('.btm button').click(() => {
        $z.val('');
        $x.val('')
    })
</script>
<script>

    const animateForm = {
        In_shell: 'animate__fadeIn',
        Out_shell: 'animate__fadeOut',

        In_body: 'animate__fadeIn',
        Out_body: 'animate__fadeOut'
    }


    $(document).ready(()=>{

        function PopUp(popup){
            return {
                popup: popup,
                open: $('.' + `${popup.attr('class')}` + '__open'),
                close: $('.' + `${popup.attr('class')}` + '__body__container__close'),
                body: popup.find('.' + `${popup.attr('class')}__body`),
                shell: popup.find('.' + `${popup.attr('class')}__shell`),
            }
        }


        function open(popup, animate){
            popup.popup.css('display', 'block');
            popup.body.removeClass(animate.Out_body)
            popup.body.addClass(animate.In_body)

            popup.shell.removeClass(animate.Out_shell)
            popup.shell.addClass(animate.In_shell)
        }

        function close(popup, animate){
            popup.body.removeClass(animate.In_body)
            popup.body.addClass(animate.Out_body)

            popup.shell.removeClass(animate.In_shell)
            popup.shell.addClass(animate.Out_shell)

            setTimeout(() => {
                popup.popup.css('display', 'none') 
            }, 500);
        }

        function PopStart(popup,animate) {

            PopUp(popup).open.click(() => {
            open(PopUp(popup),animate);
            })
            PopUp(popup).shell.click(()=>{
                close(PopUp(popup),animate);
            })
            PopUp(popup).close.click(()=>{
                close(PopUp(popup),animate);
            })
            $(window).scroll(()=>{
                close(PopUp(popup),animate);
            })
        }

        //Попапы, неменяющиеся 
        PopStart($('.calculater'), animateForm);
        
    })

</script>