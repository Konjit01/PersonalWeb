<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->




<?php echo validation_errors(); ?>
    
  
<?php echo form_open_multipart('units/create');?>
      
       <h2 style="color: #099; padding-left: 20px;"><?php echo $title; ?></h2>
      
        <div class="col-md-3">

            <div class="form-group">
                <label>Select Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id'];?>"><?php echo $category['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>   
           </div>
           <div class="col-md-3">
              <label>Select Subcategory</label>
              <div class="form-group">
                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                        <option value="">--SubCategory--</option>
                    </select>
                </div>   
        
          </div>
           <div class="col-md-3">
             <label>Upload an Image</label> 
            <div class="form-group">
                 <!-- <label for="imgfile" style="float">Upload Image</label>-->
                <input type="file" name="userfile" id="imgfile"size="20">
            </div>
            </div>
             
            <div class="col-md-3">
         <legend style="color:#099;">Activities</legend>
             <h4><?php echo "You have contributed   <strong>$sum_units</strong> article(s)";?></h4>
             
         </div>
        <div class="col-md-9">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Add Title">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
         </div>
          <button type="submit" class="btn btn-success btn-block" style="color:white;">Submit</button>
         </div>
          
     </div>
<?php echo form_close();?>
<script src="https://code.jquery.com/jquery-1.11.2.js" integrity="sha256-WMJwNbei5YnfOX5dfgVCS5C4waqvc+/0fV7W2uy3DyU="crossorigin="anonymous"></script>

<script type="text/javascript">
        $(document).ready(function(){
           $('#category_id').on('change', function(){
                var id = $(this).val();
                if(id == '')
                {
                    $('#subcategory_id').prop('disabled', true);
                }
                else
                {
                    $('#subcategory_id').prop('disabled', false);
                    $.ajax({
                       
                        url:"<?php echo base_url() ?>units/get_subcategories",
                        type: "POST",
                        data: {'id' : id},
                        dataType: 'json',
                        success: function(data){
                           $('#subcategory_id').html(data);
                        },
                        error: function(){
                            //alert(data);
                            $('#subcategory_id').prop('disabled', true);
                            //alert('No sub categories found!!');
                        }
                    });
                }
           }); 
        });
</script>

    
