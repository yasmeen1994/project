<style type="text/css">  
 table {  
      background:#ADDAF1;  
      border-radius:10px;  
      margin-top:95px;  
 }  
 </style>


 
 <title><?php echo $title;?></title>  
 <form action="register" name="form1" id="form1" method="post" >  
 <table width="200" border="0" align="center">  
  <tr>  
   <td>Name:</td>  
   <td><input type="text" name="username" id="username"> <font color="#FF0000"><?php echo form_error('username');?></font></td>  
  </tr>  
  <tr>  
   <td>Email:</td>  
   <td><input type="text" name="email" id="email"> <font color="#FF0000"><?php echo form_error('email');?></font></td>  
  </tr> 
  
  <tr>  
   <td>Password:</td>  
   <td><input type="password" name="password" id="password"> <font color="#FF0000"><?php echo form_error('password');?></font></td>  
  </tr>  
  
   <tr> 
  <td>confirm password:  </td>
  <td><input type="password"    name="confpass"  value=""  id="confpass" /> <font color="#FF0000"><?php echo form_error('confpass');?></font> </td>
  </tr> 
  
  <tr> 
  <td>birthday date:  </td>
  <td><input type="text"    name="date"  value=""     placeholder="0000/00/00"  id="date" /> <font color="#FF0000"><?php echo form_error('date');?></font> </td>
  </tr>
  
   <tr> 
  <td>phone:  </td>
  <td><input type="text"    name="phone"  value=""     placeholder="xxx-xxxx-xxxx"   id="phone" /> <font color="#FF0000"><?php echo form_error('phone');?></font> </td>
  </tr> 

<!--
         <tr> 
		<td>City: </td>
		<td><input type="text" name="city" id="city" ><font color="#FF0000"></font></td>
		
		<td>Zip Code: </td>
		<td><input type="text" name="zipcode" id="zipcode" ><font color="#FF0000"></font></td>
		
		<td>state:</td>
		<td><input type="text" name="state" id="state" ><font color="#FF0000"></font></td>
	    </tr>
		
		
<tr> 
<td> Select Your Photo:</td> 
<td> <input type="file" name="image"  id="image"  ><font color="#FF0000"></font> </td> 
</tr> 
  
 -->
  
  
  <tr><td colspan="4" align="center" ><input type="submit" name="submit" id="submit" value="Register"></td></tr>  
 </table>  
 </form>  
 
 
 
 
 
 
 