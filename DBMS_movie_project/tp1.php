<section id="form">
         <div class="headingg">
             <!-- <h3>Book Your Ticket for  <?php echo ($id) ?>   </h3> -->
            </div>
            <form action="book.php" method="post">
                <div class="formmm"> 
                    <div class="form-items">
                        <label for="count">Number of Tickets</label><br>
                        <input type="number" name="count" id="count" placeholder="Enter Count : ">
                    </div>
           <!-- <span> <label for="threater">Location :</label>
            <select name="threater" id="threater">
                <option value="TI">Treasure Island</option>
                <option value="C21">C21</option>
                <option value="FD">Fundoor</option>
            </select>
        </span> -->
        <div class="form-items">
                        <label for="threater">Threname</label><br>
                        <input type="text" name="threater" id="threater" placeholder="Enter Name : ">
                    </div>

      </div>
      <button class="btn">Book Now</button>