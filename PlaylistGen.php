



<script type="text/javascript">

function AddPlaylist(form, Action){
var Addplaylist="";
var list="";

if(Action==1) {
if(list!=null) 
 
Addplaylist="<a href=\""+ form.URL.value+ "\" class=\"currentvid\" ><img src=\""+ form.IMG_URL.value+"\" width=\"200\" class=\"img-responsive\"><time datetime=\"&gt;2021-02-13\" class=\"duration\">"+ form.duration.value+"</time><p style=\"font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 1px; color:#000;\"class=\"f-title\">"+ form.description.value+"...</p></a>\r\n";

form.video_list.value+=Addplaylist;
     }
}
</script> 



<form method="post" enctype="multipart/form-data">

 
          


  <table border="2">
      <tr>
 <input class="btn btn-default" type="submit" value="Submit Video File"  onclick="AddPlaylist(this.form,1);return false;" 
           <br>
      <td>Select Image</td>
      <td><input type="file" name="IMG_URL"  id="IMG_URL" Required></td>
    </tr>
    <tr>
      <td>Enter  vid url</td>
      <td><input type="text" name="URL"  id="URL" size="30" placeholder="Enter vid url" Required></td>
    
      <input  type="hidden" name="username" value=" "/><p>

   
    <tr>
      <td>Enter duration</td>
      <td>
<input type="text" name="duration" id="duration" placeholder="video duration"  />
         </td>
    </tr>
      
    <tr>
      <td>Enter description</td>
      <td>

<textarea class="form-control" name="description" id="description" rows="3" cols="90"placeholder="description" ></textarea>

         </td>
    </tr>
    <tr>
      <td></td>
      <td>

<textarea class="form-control" name="video_list" id="video_list" rows="15" cols="90"></textarea>

         </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>
