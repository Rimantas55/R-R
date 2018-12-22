<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>some stuff</title>
</head>
<body>

<div id="list1" class="dropdown-check-list" tabindex="100">
        <span class="anchor">Select Fruits</span>
        <ul class="items">
            <li><input type="checkbox" />Apple </li>
            <li><input type="checkbox" />Orange</li>
            <li><input type="checkbox" />Grapes </li>
            <li><input type="checkbox" />Berry </li>
            <li><input type="checkbox" />Mango </li>
            <li><input type="checkbox" />Banana </li>
            <li><input type="checkbox" />Tomato</li>
        </ul>
    </div>

    <script type="text/javascript">

        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList.classList.contains('visible'))
                checkList.classList.remove('visible');
            else
                checkList.classList.add('visible');
        }

        checkList.onblur = function(evt) {
            checkList.classList.remove('visible');
        }
    </script>

    <hr />



</body>
</html>