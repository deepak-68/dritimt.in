<div class="custom_filter">
    <a href="javascript:;" id="registration-toggle-form">Filter</a>
</div>

<div id="form-container">
   <div class="filter">
    <div class="row">
        <div class="col-md-12 date_range" id="date_range_sec">
            <div class="form-group">
                <label for="date_range">Date Range</label>
                <input name="date_range" id="date_range" type="text" value="" autocomplete="off" class="form-control" placeholder="Date Range" />
            </div>
        </div>
        <div class="col-md-5 d-none clear-filter" id="clear_filter">
            <div class="form-group">
                <a class="btn btn-danger clear-filter-btn" href="javascript:;"> Clear Filter</a>
            </div>
        </div>
     </div>

     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
               <input name="name" type="text" value="" autocomplete="off" class="form-control" placeholder="Name" />
            </div>
         </div>
             
    </div>
    <!-- Gender -->
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <select name="gender" id="gender" class="form-control">
                    <option value="">-- Gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Gender-->

     
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
               <input name="phone" type="text" value="" pattern="[0-9]*" autocomplete="off" class="form-control" placeholder="Phone No" />
            </div>
         </div>
         
         
      </div>
      
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select name="category" id="category" class="form-control">
                        <option value="">-- Category --</option>
                        <option value="SC/ST">SC/ST</option>
                        <option value="OBC">OBC</option>
                        <option value="GEN">GEN</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
            </div>
        </div>
   </div>
</div>
