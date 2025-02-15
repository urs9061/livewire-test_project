<div>
 <form action="" method="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" wire:model="fname"><br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" wire:model="lname"><br>
    <input type="button" value="Submit" wire:click="save"> 
 </form>
 
    <h4>Student First Name: {{$fname}}</h4>
    <h4>Student Last Name: {{$lname}}</h4>
    <h4>Student Full Name: {{$fullname}}</h4>
</div>
