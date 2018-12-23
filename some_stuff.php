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
    
    <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sports</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose..</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>



</body>
</html>