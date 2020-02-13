<html>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>pleased with our service in our shop or need help kindly send in your view:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/ecycle/img/1-bike.jpg" style="width:100%">
    </div>
	<style>
	* {
  box-sizing: border-box;
}

/* input in the box */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0000FF;
}

/* this will style the container */
.container {
  border-radius: 5px;
  background-color: #0000FF;
  padding: 10px;
}

/* for the column down the contact box */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* this is for the float area */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* this shoul show the responsive of the area */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Username</label>
        <input type="text" id="username" name="username" placeholder="Your username..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Kenya">Kenya</option>
          <option value="Uganda">Uganda</option>
          <option value="Somalia">Somalia</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
		<a href="shop.php">back to shop</a>
		  <div class="FAQ"> Frequent Asked Question</div>
		  <h2> must one log in to buy an item</h2>
		  <h

      </form>
    </div>
  </div>
</div>
</html>
