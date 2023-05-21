<p>Many field types</p>
<form  method="post" action="more.php"></form>
<p>
  <label for="inp01">account</label>
  <input type="text" name="account" id="inp01" size="40">
</p>
<p>
  <label for="inp02">Password</label>
  <input type="password" name="pw" id="inp02" size="40">
</p>
<p>
  <label for="inp03">NickName</label>
  <input type="text" name="nick" id="inp03" size="40">
</p>
<p>
  refenrenes time <br>
  <input type="radio" name="when" value="am">AM <br>
  <input type="radio" name="when" value="am" checked>PM <br>

</p>
<p>class token. ..</p>
<input type="checkbox" name="class1" value="si052" checked>
COA - computer orannization and Architecture <br>
<input type="checkbox" name="class2" value="si902" checked>
CDM <br>
<select name="soda" id="input06">
  <option value="0">-- please select --</option>
  <option value="1">Coke</option>
  <option value="2">Pepsi</option>
  <option value="3">Coca</option>
  <option value="4">Sua</option>
</select>
<p>
  <label for="inp07">Which snaok
    <select name="snaok" id="inp07">
      <option value="">-- please select --</option>
      <option value="chips">chip</option>
      <option value="peanuts" selected>Peanuts</option>
      <option value="cookie">Cookie</option>
    </select>
  </label>
</p>
<p>
  <label for="inp08">
    tell us about you seft
    <textarea name="about" id="inp08" cols="10" rows="40">
      l love building websites in PHP and MySQL
    </textarea>
  </label>
</p>
<p>
  <label for="inp08">Which are awesome <br>
  <select multiple = "multiple" name="code[]" id="inp09">
  <option value="python">python</option>
  <option value="php">php</option>
  <option value="java">java</option>
  <option value="html">html</option>
  </select>
  
</label>
</p>