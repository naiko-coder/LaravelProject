
<title>Error 403</title>

<style>
    .container {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 500px;
        background: #CCC;
        transform: translate(-50%, -50%);
        padding: 160px;
        border-radius: 5px;
    }

    ._403:after {
        content: 'Akses Ditolak!';
        width: auto;
        height: 20px;
        color: #D32F2F;
        font: 1.5em Arial;
        display: block;
        position: absolute;
        transform: translate(-50%) scale(1);
        top: 10%;
        left: 50%;
        letter-spacing: 2px;
        animation: popup 2s ease-in-out;
    }

    @-webkit-keyframes popup {
        0% {
            transform: translate(-50%) scale(0);
        }

        90% {
            transform: translate(-50%) scale(0);
        }

        100% {
            transform: translate(-50%) scale(1);
        }
    }


    .component {
        float: left;
        margin: 10px;
        position: relative;
    }

    .PC {
        height: 100px;
        width: 40%;
        border: 5px solid #333;
        border-radius: 5px;
        position: relative;
    }

    .PC:before {
        content: '';
        width: 5px;
        height: 20px;
        border: 5px solid #333;
        position: relative;
        left: 50%;
        transform: translate(-50%);
        top: 100px;
        display: block;
        background: #333;
    }

    .PC:after {
        content: '';
        width: 40px;
        height: 0px;
        border: 4px solid #333;
        position: relative;
        left: 50%;
        transform: translate(-50%);
        top: 95px;
        display: block;
        border-radius: 3px;
    }

    .PC .flare {
        width: 50px;
        height: 1px;
        background: #AAA;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
    }

    .PC .flare:after,
    .PC .flare:before {
        content: '';
        width: 30px;
        height: 1px;
        background: inherit;
        position: absolute;
        top: -5px;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .PC .flare:after {
        top: 6px;
    }

    .connection {
        width: 30%;
        height: 100px;
    }

    .connection .dot {
        background: #444;
        display: inline-block;
        margin-left: 30px;
        position: absolute;
        left: 30%;
        top: 50%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        animation: blink 0.3s ease-in infinite alternate;
    }

    .connection .first {
        margin-left: 0px;
    }

    .connection .second {
        margin-left: 30px;
        animation-delay: 0.1s;
    }

    .connection .third {
        margin-left: 60px;
        animation-delay: 0.2s;
    }

    @-webkit-keyframes blink {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }


    .server {
        width: 12%;
        height: 130px;
        border: 5px solid #333;
        border-radius: 5px;
        position: relative
    }

    .server .slot {
        display: block;
        background: #444;
        width: 90%;
        height: 8%;
        margin: 10% 5%;
        position: relative;
        top: 55%;
        border-radius: 2px;
    }

    .server .button {
        width: 6px;
        height: 6px;
        background: #444;
        display: inline-block;
        border-radius: 50%;
        position: absolute;
        right: 20%;
        bottom: 5%;
    }

    .server .button:last-of-type {
        height: 8px;
        width: 8px;
        right: 5%;
    }


    .connection .num-four {
        width: 30px;
        border-radius: 0px;
        height: 3px;
        margin-left: -10px;
        background: #D32F2F;
        animation: turn-four .3s ease-in;
    }

    .connection .num-four:before {
        content: '';
        width: 30px;
        border-radius: 0px;
        height: 3px;
        transform: rotate(-60deg);
        transform-origin: left top;
        background: #D32F2F;
        display: block;
        position: absolute;
        left: 0px;
        bottom: 0px;
        animation: fade-in .5s ease-in;
    }

    .connection .num-four:after {
        content: '';
        width: 3px;
        height: 30px;
        display: block;
        position: absolute;
        right: 5px;
        bottom: -10px;
        background: #D32F2F;
        animation: fade-in-late .5s ease-in;
    }

    @-webkit-keyframes turn-four {
        0% {
            border-radius: 50%;
            width: 10px;
            height: 10px;
        }

        20% {
            border-radius: 0px;
            height: 10px;
            width: 10px;
        }

        80% {
            width: 10px;
            height: 3px
        }

        100% {
            width: 30px;
            height: 3px
        }
    }

    @-webkit-keyframes fade-in {
        0% {
            opacity: 0;
            color: #444
        }

        60% {
            opacity: 0;
            color: #444
        }

        100% {
            opacity: 1;
            color: #D32F2F
        }
    }

    @-webkit-keyframes fade-in-late {
        0% {
            opacity: 0;
            color: #444
        }

        80% {
            opacity: 0;
            color: #444
        }

        100% {
            opacity: 1;
            color: #D32F2F
        }
    }


    .connection .num-zero {
        width: 17px;
        border-radius: 35px;
        height: 30px;
        background: none;
        border: 3px solid #D32F2F;
        ;
        animation: turn-zero .8s ease-in;
    }


    @-webkit-keyframes turn-zero {
        0% {
            border-radius: 50%;
            height: 10px;
            width: 10px;
            border: 0px;
            background: #444;
        }

        70% {
            border-radius: 50%;
            height: 10px;
            width: 10px;
            border: 0px;
            background: #444;
        }

        80% {
            border-radius: 35px;
            height: 10px;
            width: 10px;
            border: 3px solid #444;
            opacity: 1
        }

        95% {
            width: 10px;
            height: 30px;
            border: 3px solid #444;
        }

        100% {
            width: 17px;
            border: 3px solid #D32F2F
        }
    }

    .connection .num-three {
        width: 26px;
        border-radius: 0px;
        height: 40px;
        top: 41%;
        margin-left: 70px;
        background: none;
        border-top: 3px solid #444;
        animation: turn-three 1.4s ease-in;
        border-color: #D32F2F;
    }

    .connection .num-three:before {
        content: '';
        width: 3px;
        border-radius: 0px;
        height: 25px;
        transform: rotate(45deg);
        transform-origin: right top;
        background: #D32F2F;
        display: block;
        position: absolute;
        right: 0px;
        top: 0px;
        animation: fade-in-late 1.8s ease;
    }

    .connection .num-three:after {
        content: 'C';
        font-family: Consolas, sans-serif;
        font-weight: 500;
        display: block;
        position: absolute;
        top: 3px;
        right: 0px;
        padding: 0px;
        font-size: 40px;
        color: #D32F2F;
        transform: rotate(180deg);
        animation: fade-in-late 1.9s ease;
    }

    @-webkit-keyframes turn-three {
        0% {
            border-radius: 50%;
            width: 10px;
            height: 10px;
            top: 50%;
            background: #444;
            border-top: 0px;
        }

        75% {
            border-radius: 50%;
            width: 10px;
            height: 10px;
            top: 50%;
            background: #444;
            border-top: 0px;
        }

        80% {
            border-radius: 0px;
            height: 10px;
            width: 10px;
            top: 41%;
            background: none;
            border-top: 3px solid #444;
        }

        90% {
            width: 30px;
            height: 3px;
            top: 18%;
            color: #444
        }

        100% {
            width: 30px;
            height: 3px;
            color: #D32F2F
        }
    }


    .redirect {
        display: block;
        width: 200px;
        height: 50px;
        background: cornflowerblue;
        color: white;
        font-size: 18px;
        outline: none;
        border: none;
        cursor: pointer;
        position: absolute;
        bottom: 50px;
        left: 50%;
        transform: translateX(-50%);
        display: none;
    }

    .redirect:hover {
        background: #5c88d6;
        transition: background 0.2s ease;
    }

    .visible {
        display: block;
        animation: popup 2s ease;
    }
</style>

<div class="container">
    <div class="component PC"></div>
    <div class="component connection">
        <div class="dot first"></div>
        <div class="dot second"></div>
        <div class="dot third"></div>
    </div>
    <div class="component server">
        <div class="slot"></div>
        <div class="slot"></div>
        <div class="button"></div>
        <div class="button"></div>
    </div>
    <button onclick="location.href='/dashboard'" class="redirect " onclick="connect()">Kembali ke halaman utama</button>
</div>

<script>
    function reconnect() {
        setTimeout(function() {
            document.querySelector('.first').classList.toggle('num-four');
            document.querySelector('.second').classList.toggle('num-zero');
            document.querySelector('.third').classList.toggle('num-three');
            document.querySelector('.container').classList.toggle('_403');
            document.querySelector('.redirect').classList.toggle('visible');
        }, 1500);
    }



    window.addEventListener('load', reconnect);
</script>