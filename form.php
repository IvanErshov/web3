<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>WEB_BECKEND_3</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="main-aside-wrapper">
    <div id="cont" class="container">
      <div id="form" class="col-12 order-lg-3 order-sm-2">
        <form action="" method="POST">
          Name 
          <label>
            <input name="fio" placeholder="Enter ФИО">
          </label>
          <br>
          E-mail:
          <label>
            <input type="email" name="email" placeholder="Enter e-mail">
          </label><br /><br />
          <p>Year of birth</p>
          <label>
            <select name="yob">
              <option value="1990" selected="selected">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
			  <option value="2002">2003</option>
			  <option value="2002">2004</option>
			  <option value="2002">2005</option>
            </select>
          </label>

          <p>Gender</p>
          <label>
            <input type="radio" name="radio-pol" checked="checked" value="M">M
          </label>
          <label>
            <input type="radio" name="radio-pol" value="W" />W
          </label><br />

          <p>Number of limbs</p>
          <label>
            <input type="radio" name="radio-kon" value="0" />0
          </label>
          <label>
            <input type="radio" name="radio-kon" value="1" />1
          </label>
          <label>
            <input type="radio" name="radio-kon" value="2" />2
          </label>
          <label>
            <input type="radio" name="radio-kon" value="3" />3
          </label>
          <label>
            <input type="radio" checked="checked" name="radio-kon" value="4" />4
          </label>
          <label>
            <input type="radio" name="radio-kon" value="5" />5
          </label><br /><br />

           <p>Ability</p>
          <label>
            <select name="sp-sp[]" multiple=multiple>
                <option value="immortality">Immortality</option>
                <option value="invisibility">Invisibility</option>
                <option value="levitation">Levitation</option>
            </select>
          </label><br /><br />

          <p id="bio">Biography</p>
          <label>
            <textarea placeholder="Tell us about yourself" name="biography" rows="6" cols="60"></textarea>
          </label>
          <br>

          <label>
            Familiarize 
            <input type="checkbox" name="checkbox">
          </label>
          <br>
          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
