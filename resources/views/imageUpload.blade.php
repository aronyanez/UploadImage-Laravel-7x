
         <form method="post" action="/image-upload" enctype="multipart/form-data">
             {{csrf_field()}}
                  <input type="file" name="image_name" >
                 <button type="submit">Update</button>
             </div>
           </form>
