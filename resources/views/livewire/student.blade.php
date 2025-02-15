<div>
   <h1>Student Data </h1>
   <table>
    <tr>
        <th>
            <label for="fname">First Name</label>
        </th>
        <td>
            <input type="text" id="fname" wire:model="fname" name="fname">
        </td>
    </tr>
    <tr>
        <th>
            <label for="lname">Last Name</label>
        </th>
        <td>
            <input type="text" id="lname" wire:model="lname" name="lname">
        </td>
    </tr>         
    </table>
    <br>
    <button wire:click="PrintName" type="PrintName">Save</button>
    <h3>student First Name : {{$fname}}</h3>
    <h3>student Last Name : {{$lname}}</h3>
    <h3>student Full Name : {{$fullname}}</h3>

</div>
