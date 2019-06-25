<?php 


$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>404 NOT FOUND</title>
	<meta charset="utf-8">
</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Bevan");

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: rgb(40,40,40);
    overflow: hidden;
}

p {
    font-family: "Bevan", cursive;
    font-size: 130px;
    margin: 10vh 0 0;
    text-align: center;
    letter-spacing: 5px;
    background-color: black;
    color: transparent;
    text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.1);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;

    
}
p span {
        font-size: 1.2em;
    }

code {
    color: #bdbdbd;
    text-align: center;
    display: block;
    font-size: 16px;
    margin: 0 30px 25px;

    
}
code span {
        color: #f0c674;
    }

  code  i {
        color: #b5bd68;
    }

  code  em {
        color: #b294bb;
        font-style: unset;
    }

 code   b {
        color: #81a2be;
        font-weight: 500;
    }
    code   ins {
        color: #ff3838;
        font-weight: 500;
    }


a {
    color: #8abeb7;
    font-family: monospace;
    font-size: 20px;
    text-decoration: underline;
    margin-top:10px;
    display:inline-block
}

@media screen and (max-width: 880px) {
    p {
        font-size: 14vw;
    }
}

</style>
<body>

<p>HTTP: <span>404</span></p>
<code><em>&lt;?php</em></code>
<code>$my_ip_ddress = '<?php echo $ip; ?>';</code>
<code><span>$this_page</span>-><em>notFound()</em> = true;</code>
<code><ins>if</ins>(<span>$client</span>-><em>detectHacker()</em> == <b>true</b>) {<br/>
	<span>$detect</span>-><em>getMyLocation(</em>$my_ip_ddress<em>)</em>;<br/>SaveToLog(<span>$detect</span>);<br/>try_again();}</code>
<code><ins>else if</ins>($we_screwed_up) {<em>echo </em><i>"We're really sorry about that."</i>; <em>header</em>("<span>location:</span> <i>Content-Type: application/http;version=1.1"</i>);}</code>
<center><a href="/">HOME</a></center>
<script>
var _0x2197=['getElementsByTagName','code','innerHTML','toString','push','shift','0x0','0x1','0x2','slice','length'];(function(_0x3af98c,_0x1a2bde){var _0x289a70=function(_0x3f1609){while(--_0x3f1609){_0x3af98c['push'](_0x3af98c['shift']());}};_0x289a70(++_0x1a2bde);}(_0x2197,0xe5));var _0x1c92=function(_0x48f096,_0x303e9e){_0x48f096=_0x48f096-0x0;var _0x127842=_0x2197[_0x48f096];return _0x127842;};var _0x3589=[_0x1c92('0x0'),_0x1c92('0x1'),_0x1c92('0x2'),_0x1c92('0x3'),_0x1c92('0x4'),_0x1c92('0x5')];(function(_0x3b6420,_0x275d42){var _0xd34b57=function(_0x4923b1){while(--_0x4923b1){_0x3b6420[_0x1c92('0x6')](_0x3b6420[_0x1c92('0x7')]());}};_0xd34b57(++_0x275d42);}(_0x3589,0xec));var _0x50c1=function(_0x2b8be4,_0xa4c11e){_0x2b8be4=_0x2b8be4-0x0;var _0x194be6=_0x3589[_0x2b8be4];return _0x194be6;};function type(_0x144d29,_0x6e3479){var _0x8de563=document[_0x50c1(_0x1c92('0x8'))](_0x50c1('0x1'))[_0x144d29][_0x50c1('0x2')][_0x50c1('0x3')]();var _0x4a56bd=0x0;document[_0x50c1(_0x1c92('0x8'))](_0x50c1(_0x1c92('0x9')))[_0x144d29][_0x50c1(_0x1c92('0xa'))]='';setTimeout(function(){var _0x6ba0d1=setInterval(function(){_0x4a56bd++;document['getElementsByTagName'](_0x1c92('0x3'))[_0x144d29][_0x50c1(_0x1c92('0xa'))]=_0x8de563[_0x50c1('0x4')](0x0,_0x4a56bd)+'|';if(_0x4a56bd==_0x8de563[_0x50c1('0x5')]){clearInterval(_0x6ba0d1);document[_0x50c1(_0x1c92('0x8'))](_0x50c1(_0x1c92('0x9')))[_0x144d29][_0x50c1(_0x1c92('0xa'))]=_0x8de563;}},0xa);},_0x6e3479);}type(0x0,0x0);type(0x1,0x258);type(0x2,0x514);type(0x3,0x76c);type(0x4,0xf3c);

</script>
</body>
</html>